// =======================
// AI FORGE – UNIT SCAN SYSTEM
// =======================

// OPEN PANEL
function openScanPanel(unit, image, description) {
    document.getElementById("scanUnitName").textContent = unit;
    document.getElementById("scanModel").textContent = unit.toUpperCase();
    document.getElementById("scanImage").src = image;
    document.getElementById("scanDescription").textContent = description;
    document.getElementById("unitScanPanel").classList.add("show");
}

// CLOSE PANEL
function closeScanPanel() {
    document.getElementById("unitScanPanel").classList.remove("show");
}

// Enforce 4-digit numeric code
(function enforceFourDigitCode() {
    const scanInput = document.getElementById('scanAccessCode');
    if (!scanInput) return;

    scanInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
    });

    scanInput.addEventListener('paste', (e) => {
        e.preventDefault();
        const paste = (e.clipboardData || window.clipboardData).getData('text') || '';
        e.target.value = paste.replace(/\D/g, '').slice(0, 4);
    });

    scanInput.addEventListener('blur', (e) => {
        e.target.classList.toggle('invalid', e.target.value && e.target.value.length !== 4);
    });
})();

// Attach scan buttons
document.querySelectorAll(".forge-cta-btn").forEach(btn => {
    btn.addEventListener("click", function () {
        const card = this.closest(".forge-card-inner");
        if (!card) return;

        const unitName = card.querySelector(".forge-card-title")?.textContent.trim();
        const imgSrc = card.querySelector(".forge-avatar-image img")?.src;

        openScanPanel(
            unitName,
            imgSrc,
            "Performing high-fidelity chassis scan… Neural sync initializing."
        );
    });
});
