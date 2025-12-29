<footer class="dh-footer">
    <div class="dh-footer-inner">

        <div class="dh-footer-brand">
            <div class="dh-footer-logo">
                <div class="dh-logo-icon"
                     style="border-color:#2e97ec; box-shadow:0 0 14px rgba(30, 191, 255, 0.45);">
                    ◆
                </div>
            </div>

            <div class="dh-footer-brand-text">
                <h3 class="dh-footer-title">Diamond Hands Trading Co.</h3>
                <p class="dh-footer-tagline">
                    Master the Markets. Forge Your Trading Edge. Become a Legend.
                </p>
            </div>
        </div>

        <div class="dh-footer-links">
            <h4>Navigation</h4>
            <ul>
                <li><a href="/diamondhands/home.php">Home</a></li>
                <li><a href="#">Rankings</a></li>
                <li><a href="/diamondhands/challenge.php">Challenges</a></li>
                <li><a href="/diamondhands/aiforge.php">AI Forge</a></li>
            </ul>
        </div>

        <div class="dh-footer-values">
            <h4>Why Trade With Us</h4>
            <ul>
                <li>Ultra-transparent rules</li>
                <li>Up to 100% payouts</li>
                <li>Gamified trading universe</li>
                <li>AI insights (no signals)</li>
                <li>Lifetime XP & rankings</li>
            </ul>
        </div>
    </div>

    <div class="dh-footer-bottom">
        <p>© <?= date('Y') ?> Diamond Hands Trading Co., LLC. All Rights Reserved.</p>
    </div>
</footer>

<script src="/diamondhands/assets/js/starfield.js" defer></script>
<script src="/diamondhands/assets/js/mobile-nav.js" defer></script>
<script src="/diamondhands/assets/js/admin-panel.js" defer></script>

<?php if ($active === "challenge"): ?>
<script src="/diamondhands/assets/js/challenge-builder.js" defer></script>
<?php endif; ?>

<?php if ($active === "aiforge"): ?>
<script src="/diamondhands/assets/js/aiforge.js" defer></script>
<script src="/diamondhands/assets/js/admin-panel.js" defer></script>
<script src="/diamondhands/assets/js/mobile-nav.js" defer></script>
<?php endif; ?>


</body>
</html>
