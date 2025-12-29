<?php
$pageTitle = "Diamond Hands Trading Co.";
$active = "home";

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/admin-panel.php';
?>

<main class="dh-main">
    <section class="dh-hero home-bg" id="heroHome">
        <canvas id="starCanvas"></canvas>
        <div class="dh-hero-overlay"></div>

        <div class="dh-hero-content">
            <div class="dh-hero-text">

                <h1 class="dh-hero-title-main">DIAMOND HANDS</h1>
                <h2 class="dh-hero-title-sub">TRADING CO.</h2>

                <p class="dh-hero-copy">
                    High tech, high stakes. Where gritty determination meets
                    cutting-edge AI. For the traders, the gamers, and the grinders
                    who play to win.
                </p>

                <div class="dh-hero-actions">
                    <a href="#" class="dh-btn dh-btn-primary">View Rankings</a>
                    <a href="/aiforge.php" class="dh-btn dh-btn-ghost">Enter AI Forge</a>
                </div>

            </div>
        </div>

    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>