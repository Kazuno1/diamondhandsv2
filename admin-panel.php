<button id="siteSettingsBtn" class="site-settings-btn">⚙️</button>

<div id="siteSettingsPanel" class="site-settings-panel">

    <h3>Admin Display Controls</h3>

    <!-- 🔐 ADMIN LOCK -->
    <div id="adminLock" class="admin-lock">
        <input
            type="password"
            id="adminPass"
            placeholder="Admin Access Code"
        />
        <button id="unlockAdmin">Unlock</button>
    </div>

    <!-- 🎛️ ADMIN CONTROLS -->
    <div id="adminControls" class="admin-controls" style="display:none">

        <div class="toggle-row">
            <label>
                <input type="checkbox" id="toggleBackground">
                Disable Background Animation
            </label>

            <label>
                <input type="checkbox" id="toggleEffects">
                Disable Visual Effects
            </label>

            <label>
                <input type="checkbox" id="toggleBackgroundImage">
                Disable All Background Images
            </label>
        </div>

        <hr>

        <!-- 🖼️ BACKGROUND UPLOADS -->
        <div class="bg-section">
            <h4>Home Background</h4>
            <input type="file" id="bgHome" accept="image/*">
            <div class="bg-preview" id="previewHome"></div>
        </div>

        <div class="bg-section">
            <h4>Challenges Background</h4>
            <input type="file" id="bgChallenges" accept="image/*">
            <div class="bg-preview" id="previewChallenges"></div>
        </div>

        <div class="bg-section">
            <h4>AI Forge Background</h4>
            <input type="file" id="bgForge" accept="image/*">
            <div class="bg-preview" id="previewForge"></div>
        </div>

        <button id="saveAdminSettings" class="save-btn">
            Save & Apply
        </button>
    </div>

    <button id="closeSettings" class="settings-close">
        Close
    </button>
</div>


<nav id="mobileNav" class="dh-mobile-nav" aria-hidden="true">
    <a href="/index.php" class="<?= $active === 'home' ? 'active' : '' ?>">Home</a>
    <a href="#">Rankings</a>
    <a href="/challenge.php">Challenges</a>
    <a href="/aiforge.php">AI Forge</a>
</nav>
