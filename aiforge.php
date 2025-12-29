<?php
$active = "aiforge";
include __DIR__ . '/partials/header.php';
?>

<!-- MAIN -->
<main class="dh-main">
    <section class="dh-hero forge-bg" id="heroForge">
        <canvas id="starCanvas"></canvas>
        <div class="dh-hero-overlay"></div>

        <!-- CONTENT -->
        <div class="forge-wrapper">

            <div class="forge-system-pill">
                <span class="forge-dot"></span> SYSTEM READY // V2.2
            </div>

            <div class="forge-title-block">
                <h1 class="forge-title">AI AVATAR FORGE</h1>
                <p class="forge-subtitle">Initialize New Unit // Resume Connection</p>
                <p class="forge-subcaption">
                    Configure your <span>prop-trading persona</span> and evolve your avatar as you level up.
                </p>
            </div>

            <div class="forge-section-label">Initialize New Unit</div>

            <!-- UNITS -->
            <div class="forge-unit-row">

                <?php
                $units = [
                    ["Alpha", "SCALPER", "alpha.jpeg"],
                    ["Gamma", "POSITION", "gamma.jpeg"],
                    ["Beta", "SWING", "beta.jpeg"],
                    ["Delta", "HIGH VOL", "delta.jpeg"]
                ];

                foreach ($units as [$name, $type, $img]) :
                ?>
                    <article class="forge-card">
                        <div class="forge-card-inner">
                            <div>
                                <div class="forge-card-label"><span class="dot"></span> UNIT PROFILE</div>
                                <div class="forge-card-title">Unit <?= $name ?></div>

                                <div class="forge-avatar-image">
                                    <img src="https://github.com/Kazuno1/diamonghands/blob/main/<?= $img ?>?raw=true"
                                        alt="Unit <?= $name ?>">
                                </div>

                                <div class="forge-stats-block">
                                    <div class="forge-stats-title">UNIT STATS</div>

                                    <div class="forge-stat-row">
                                        <span>Strength</span>
                                        <div class="forge-bar-track">
                                            <div class="forge-bar-fill" style="--fill:55%"></div>
                                        </div>
                                    </div>

                                    <div class="forge-stat-row">
                                        <span>Risk / Agility</span>
                                        <div class="forge-bar-track">
                                            <div class="forge-bar-fill" style="--fill:40%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="forge-card-footer">
                                <span class="forge-unit-name"><?= strtoupper($name) ?> // <?= $type ?></span>
                                <button class="forge-cta-btn">
                                    <span class="icon"></span> Scan Unit
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- FLOATING SCAN PANEL -->
    <div id="unitScanPanel" class="scan-panel">
        <div class="scan-panel-inner">
            <div class="scan-left">
                <div class="scan-pill"><span>●</span> NEW UNIT REGISTRATION</div>
                <div class="scan-avatar-box">
                    <img id="scanImage" src="" alt="Unit Visual">
                </div>
            </div>

            <div class="scan-right">
                <div class="scan-section-title">
                    CHASSIS MODEL
                    <span class="base-tag">BASE: <span id="scanModel">UNIT</span></span>
                </div>

                <h2 id="scanUnitName" class="scan-unit-name"></h2>

                <label class="scan-label">SECURE ACCESS CODE</label>
                <input id="scanAccessCode" type="password" maxlength="4"
                    class="scan-code-input" placeholder="Enter 4-digit code">

                <div class="scan-divider"></div>

                <div class="scan-rating-box">
                    <div class="rating-header">
                        <span class="pulse">⌁</span> PERFORMANCE RATING
                        <span class="rating-score">0</span>
                    </div>
                    <p id="scanDescription"></p>
                </div>

                <button class="scan-register-btn">⚙ REGISTER NEW UNIT</button>
                <button class="scan-cancel-btn" onclick="closeScanPanel()">↢ CANCEL REGISTRATION</button>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
<?php include __DIR__ . '/partials/admin-panel.php'; ?>
<script src="/diamondhands/assets/js/mobile-nav.js" defer></script>