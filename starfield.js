document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById("starCanvas");

    // ✅ HARD STOP if canvas doesn't exist
    if (!canvas) {
        console.warn("Starfield skipped: #starCanvas not found");
        return;
    }

    const ctx = canvas.getContext("2d");

    let stars = [];
    let particles = [];
    let w, h;

    function resize() {
        w = canvas.width = canvas.offsetWidth || window.innerWidth;
        h = canvas.height = canvas.offsetHeight || window.innerHeight;
    }

    function init() {
        resize();
        stars = [];

        for (let i = 0; i < 260; i++) {
            stars.push({
                x: Math.random() * w,
                y: Math.random() * h,
                size: Math.random() * 2.8 + 0.9,
                speed: Math.random() * 0.6 + 0.3,
                drift: Math.random() * 0.4 - 0.2,
                twinkle: Math.random() * Math.PI * 2,
                twinkleSpeed: Math.random() * 0.08 + 0.02,
                hue: Math.random() * 360,
                hueShift: Math.random() * 0.6 + 0.2
            });
        }
    }

    function animate() {
        ctx.clearRect(0, 0, w, h);

        for (let s of stars) {
            s.y -= s.speed;
            s.x += s.drift;

            if (s.y < 0) s.y = h;
            if (s.x < 0) s.x = w;
            if (s.x > w) s.x = 0;

            s.hue += s.hueShift;
            if (s.hue > 360) s.hue = 0;

            const pulse = 0.5 + Math.sin(s.twinkle) * 0.5;
            s.twinkle += s.twinkleSpeed;

            ctx.beginPath();
            ctx.fillStyle = `hsla(${s.hue}, 100%, 70%, ${pulse})`;
            ctx.shadowBlur = 20;
            ctx.shadowColor = `hsl(${s.hue}, 100%, 70%)`;
            ctx.arc(s.x, s.y, s.size + pulse * 0.6, 0, Math.PI * 2);
            ctx.fill();
        }

        requestAnimationFrame(animate);
    }

    window.addEventListener("resize", resize);

    init();
    animate();
});
