(() => {
    // --- Grab selects + summary fields (scoped, no global redeclare) ---
    const dhSelects = document.querySelectorAll(".custom-select");
    if (!dhSelects.length) return;

    const dhSummaryMap = {
        accountSize: document.querySelector("[data-summary='accountSize']"),
        profitTarget: document.querySelector("[data-summary='profitTarget']"),
        maxLoss: document.querySelector("[data-summary='maxLoss']"),
        profitSplit: document.querySelector("[data-summary='profitSplit']"),
        payoutDays: document.querySelector("[data-summary='payoutDays']")
    };

    const priceEl = document.getElementById("challengePrice");

    // --- Whitepaper pricing tables ---
    const baseFee = { 5000: 49, 10000: 79, 25000: 179, 50000: 299, 100000: 499 };
    const mTarget = { 2: 1.40, 4: 1.20, 6: 1.00, 8: 0.90, 10: 0.85 };
    const mLoss = { 4: 0.90, 6: 1.00, 8: 1.15, 10: 1.30, 12: 1.45 };
    const mSplit = { 60: 0.90, 70: 1.00, 80: 1.10, 90: 1.25 };
    const mPayout = { 3: 1.30, 7: 1.10, 14: 1.00, 21: 0.95, 30: 0.90 };

    const parseNumber = val =>
        parseInt(String(val).replace(/[^\d]/g, ""), 10);

    function calculateFlashPrice() {
        const values = {};
        dhSelects.forEach(sel => values[sel.dataset.key] = sel.value);

        const accountSize = parseNumber(values.accountSize);
        const profitTarget = parseNumber(values.profitTarget);
        const maxLoss = parseNumber(values.maxLoss);
        const profitSplit = parseNumber(values.profitSplit);
        const payoutDays = parseNumber(values.payoutDays);

        if (
            !baseFee[accountSize] ||
            !mTarget[profitTarget] ||
            !mLoss[maxLoss] ||
            !mSplit[profitSplit] ||
            !mPayout[payoutDays]
        ) return null;

        return Math.round(
            baseFee[accountSize] *
            mTarget[profitTarget] *
            mLoss[maxLoss] *
            mSplit[profitSplit] *
            mPayout[payoutDays]
        );
    }

    function syncUI() {
        dhSelects.forEach(sel => {
            const key = sel.dataset.key;
            if (dhSummaryMap[key]) {
                dhSummaryMap[key].textContent = sel.value;
            }
        });

        if (priceEl) {
            const price = calculateFlashPrice();
            priceEl.textContent = price === null ? "—" : `$${price}`;
        }
    }

    dhSelects.forEach(sel => sel.addEventListener("change", syncUI));
    window.addEventListener("load", syncUI);
})();
