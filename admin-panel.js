document.addEventListener("DOMContentLoaded", () => {
  const ADMIN_CODE = "diamondhands";

  // ✅ Correct for /diamondhands/ localhost + production
  const API_URL = "/diamondhands/api/admin-settings.php";
  const CACHE_KEY = "dh-admin-cache-v1";

  let state = {};

  /* ================= HERO TARGETS ================= */
  const heroHome = document.getElementById("heroHome");
  const heroChallenges = document.getElementById("heroChallenges");
  const heroForge = document.getElementById("heroForge");

  /* ================= ADMIN PANEL ELEMENTS ================= */
  const btn = document.getElementById("siteSettingsBtn");
  const panel = document.getElementById("siteSettingsPanel");
  const closeBtn = document.getElementById("closeSettings");

  const unlockBtn = document.getElementById("unlockAdmin");
  const adminPass = document.getElementById("adminPass");
  const adminLock = document.getElementById("adminLock");
  const adminControls = document.getElementById("adminControls");

  const toggleBackground = document.getElementById("toggleBackground");
  const toggleEffects = document.getElementById("toggleEffects");
  const toggleBgImages = document.getElementById("toggleBackgroundImage");

  const inputHome = document.getElementById("bgHome");
  const inputChallenges = document.getElementById("bgChallenges");
  const inputForge = document.getElementById("bgForge");

  const prevHome = document.getElementById("previewHome");
  const prevChallenges = document.getElementById("previewChallenges");
  const prevForge = document.getElementById("previewForge");

  const saveBtn = document.getElementById("saveAdminSettings");

  /* ================= CACHE FIRST (FAST LOAD) ================= */
  state = readCache() || {};
  apply(state);
  initUI();

  /* ================= LOAD FROM DB ================= */
  loadFromDB();

  async function loadFromDB() {
    try {
      const res = await fetch(API_URL, { cache: "no-store" });
      if (!res.ok) throw new Error("GET failed");

      state = await res.json();
      writeCache(state);
      apply(state);
      initUI();
      console.log("DB STATE LOADED", state);
    } catch (e) {
      console.warn("DB load failed, using cache", e);
    }
  }

  /* ================= ADMIN PANEL ================= */
  if (btn && panel) {
    btn.addEventListener("click", () => panel.classList.toggle("open"));
    closeBtn?.addEventListener("click", () => panel.classList.remove("open"));
  }

  if (localStorage.getItem("dh-admin-auth") === "true") {
    adminLock && (adminLock.style.display = "none");
    adminControls && (adminControls.style.display = "block");
  }

  unlockBtn?.addEventListener("click", () => {
    if (adminPass?.value === ADMIN_CODE) {
      localStorage.setItem("dh-admin-auth", "true");
      adminLock.style.display = "none";
      adminControls.style.display = "block";
    } else {
      alert("Invalid admin code");
    }
  });

  /* ================= UI ================= */
  function initUI() {
    toggleBackground && (toggleBackground.checked = !!state.disableBackground);
    toggleEffects && (toggleEffects.checked = !!state.disableEffects);
    toggleBgImages && (toggleBgImages.checked = !!state.disableBgImage);

    prevHome && state.home && (prevHome.style.backgroundImage = `url(${state.home})`);
    prevChallenges && state.challenges && (prevChallenges.style.backgroundImage = `url(${state.challenges})`);
    prevForge && state.forge && (prevForge.style.backgroundImage = `url(${state.forge})`);
  }

  bindUpload(inputHome, "home", prevHome);
  bindUpload(inputChallenges, "challenges", prevChallenges);
  bindUpload(inputForge, "forge", prevForge);

  function bindUpload(input, key, preview) {
    if (!input) return;
    input.addEventListener("change", () => {
      const file = input.files?.[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = e => {
        state[key] = e.target.result;
        preview && (preview.style.backgroundImage = `url(${state[key]})`);
      };
      reader.readAsDataURL(file);
    });
  }

  saveBtn?.addEventListener("click", persist);
  toggleBackground?.addEventListener("change", () => {
    state.disableBackground = toggleBackground.checked;
    persist();
  });
  toggleEffects?.addEventListener("change", () => {
    state.disableEffects = toggleEffects.checked;
    persist();
  });
  toggleBgImages?.addEventListener("change", () => {
    state.disableBgImage = toggleBgImages.checked;
    persist();
  });

  async function persist() {
    apply(state);
    writeCache(state);

    try {
      await fetch(API_URL, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(state)
      });
      console.log("DB SAVED");
    } catch {
      console.warn("DB save failed");
    }
  }

  function apply(s) {
    document.documentElement.classList.toggle("no-effects", !!s.disableEffects);

    document.querySelectorAll("#starCanvas").forEach(c => {
      c.style.display = s.disableBackground ? "none" : "block";
    });

    if (s.disableBgImage) {
      heroHome && (heroHome.style.backgroundImage = "");
      heroChallenges && (heroChallenges.style.backgroundImage = "");
      heroForge && (heroForge.style.backgroundImage = "");
      return;
    }

    heroHome && s.home && (heroHome.style.backgroundImage = `url(${s.home})`);
    heroChallenges && s.challenges && (heroChallenges.style.backgroundImage = `url(${s.challenges})`);
    heroForge && s.forge && (heroForge.style.backgroundImage = `url(${s.forge})`);
  }

  function readCache() {
    try { return JSON.parse(localStorage.getItem(CACHE_KEY)); }
    catch { return null; }
  }

  function writeCache(obj) {
    localStorage.setItem(CACHE_KEY, JSON.stringify(obj || {}));
  }
});
