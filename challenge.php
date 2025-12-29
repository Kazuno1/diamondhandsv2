<?php
$pageTitle = "Diamond Hands Trading Co. – Challenges";
$active = "challenge";
include __DIR__ . "/partials/header.php";

?>

<main class="dh-main">
    <section class="dh-hero dh-hero-challenges challenges-bg" id="heroChallenges">
        <canvas id="starCanvas"></canvas>
        <div class="dh-hero-overlay"></div>

        <!-- ⬇️ KEEP THIS ENTIRE BLOCK 100% IDENTICAL -->
        <div class="challenge-wrapper">

            <header class="challenge-header">
                <h1 class="challenge-title">Trading Challenges</h1>
                <p class="challenge-subtitle">
                    Build your flash activation challenge or jump straight into our standard
                    1-Phase and 2-Phase tiers.
                </p>
            </header>

            <!-- CUSTOMIZE YOUR CHALLENGE -->
            <section class="challenge-panel">

                <div class="custom-grid">

                    <!-- LEFT: CONTROLS -->
                    <div class="custom-controls">

                        <div class="field-group">
                            <label>Account Size</label>
                            <select class="custom-select" data-key="accountSize">
                                <option value="$5,000">$5,000</option>
                                <option value="$10,000">$10,000</option>
                                <option value="$25,000">$25,000</option>
                            </select>
                        </div>

                        <div class="field-group">
                            <label>Profit Target</label>
                            <select class="custom-select" data-key="profitTarget">
                                <option value="2%">2%</option>
                                <option value="4%">4%</option>
                                <option value="6%">6%</option>
                            </select>
                        </div>

                        <div class="field-group">
                            <label>Maximum Loss Limit</label>
                            <select class="custom-select" data-key="maxLoss">
                                <option value="6%">6%</option>
                                <option value="8%">8%</option>
                                <option value="10%">10%</option>
                            </select>
                        </div>

                        <div class="field-group">
                            <label>Profit Split</label>
                            <select class="custom-select" data-key="profitSplit">
                                <option value="60%">60%</option>
                                <option value="70%">70%</option>
                                <option value="80%">80%</option>
                            </select>
                        </div>

                        <div class="field-group">
                            <label>Days Between Payouts</label>
                            <select class="custom-select" data-key="payoutDays">
                                <option value="3 days">3 days</option>
                                <option value="7 days">7 days</option>
                                <option value="14 days">14 days</option>
                                <option value="21 days">21 days</option>
                            </select>
                        </div>

                    </div>

                    <!-- RIGHT: SUMMARY -->
                    <div class="custom-summary">
                        <h3>Your Challenge Snapshot</h3>

                        <p class="summary-line"><span>Account Size:</span> <strong
                                data-summary="accountSize">$5,000</strong></p>
                        <p class="summary-line"><span>Profit Target:</span> <strong
                                data-summary="profitTarget">2%</strong></p>
                        <p class="summary-line"><span>Maximum Loss Limit:</span> <strong
                                data-summary="maxLoss">6%</strong></p>
                        <p class="summary-line"><span>Profit Split:</span> <strong
                                data-summary="profitSplit">60%</strong></p>
                        <p class="summary-line"><span>Payout Frequency:</span> <strong data-summary="payoutDays">3
                                days</strong></p>

                        <p class="summary-line summary-price">
                            <span>Activation Fee:</span>
                            <strong id="challengePrice">$—</strong>
                        </p>

                        <p class="summary-note">
                            Final activation fees and evaluation details will be shown at checkout.
                        </p>
                    </div>

                </div>
            </section>

            <!-- STANDARD PLANS -->
            <section id="standard-plans" class="challenge-panel">
                <div class="challenge-panel-header">
                    <h2>Standard Challenge Tiers</h2>
                    <p>Choose between 1-Phase and 2-Phase evaluations with transparent pricing and rules.</p>
                </div>

                <!-- TIER SIZES -->
                <div class="tier-sizes">
                    <h3>Tier Sizes</h3>
                    <p>
                        <strong>$50,000</strong> – 1 Phase &amp; 2 Phase&nbsp;·&nbsp;
                        <strong>$100,000</strong> – 1 Phase &amp; 2 Phase&nbsp;·&nbsp;
                        <strong>$150,000</strong> – 1 Phase &amp; 2 Phase
                    </p>
                </div>

                <div class="plans-grid">
                    <!-- 1-PHASE COLUMN -->
                    <div class="plan-column">
                        <h3 class="plan-column-title">1-Phase Challenges</h3>

                        <div class="plan-card">
                            <h4>50K 1-Phase</h4>
                            <p class="plan-price">$89</p>
                            <p class="plan-note">Fastest route to funded status.</p>
                        </div>
                        <div class="plan-card">
                            <h4>100K 1-Phase</h4>
                            <p class="plan-price">$179</p>
                            <p class="plan-note">For serious traders scaling up.</p>
                        </div>
                        <div class="plan-card">
                            <h4>150K 1-Phase</h4>
                            <p class="plan-price">$269</p>
                            <p class="plan-note">High-capital, high-impact trading.</p>
                        </div>

                        <div class="rules-block">
                            <h4>1-Phase Rules</h4>
                            <ul>
                                <li>Profit Target: <strong>10%</strong></li>
                                <li>Daily Drawdown: <strong>4%</strong></li>
                                <li>Max Trailing Drawdown: <strong>6%</strong></li>
                                <li>Minimum Trading Days: <strong>3</strong></li>
                                <li>Time Limit: <strong>None</strong></li>
                                <li>Leverage: <strong>10:1</strong></li>
                                <li>Weekend Holding: <strong>Allowed</strong></li>
                                <li>News Trading: <strong>Allowed</strong></li>
                                <li>EAs &amp; Copy Trading: <strong>Allowed</strong></li>
                            </ul>
                        </div>
                    </div>

                    <!-- 2-PHASE COLUMN -->
                    <div class="plan-column">
                        <h3 class="plan-column-title">2-Phase Challenges</h3>

                        <div class="plan-card">
                            <h4>50K 2-Phase</h4>
                            <p class="plan-price">$69</p>
                            <p class="plan-note">Lower cost with two evaluation steps.</p>
                        </div>
                        <div class="plan-card">
                            <h4>100K 2-Phase</h4>
                            <p class="plan-price">$149</p>
                            <p class="plan-note">Balanced risk and capital.</p>
                        </div>
                        <div class="plan-card">
                            <h4>150K 2-Phase</h4>
                            <p class="plan-price">$229</p>
                            <p class="plan-note">Build up to elite capital access.</p>
                        </div>

                        <div class="rules-block rules-block-split">
                            <div>
                                <h4>Phase 1 Rules</h4>
                                <ul>
                                    <li>Profit Target: <strong>8%</strong></li>
                                    <li>Daily Drawdown: <strong>4%</strong></li>
                                    <li>Static Max DD: <strong>8%</strong></li>
                                    <li>Consistency: <strong>None</strong></li>
                                    <li>Minimum Trading Days: <strong>1</strong></li>
                                    <li>Leverage up to: <strong>30:1</strong></li>
                                </ul>
                            </div>
                            <div>
                                <h4>Phase 2 Rules</h4>
                                <ul>
                                    <li>Profit Target: <strong>5%</strong></li>
                                    <li>Daily Drawdown: <strong>5%</strong></li>
                                    <li>Static Max DD: <strong>10%</strong></li>
                                    <li>Consistency: <strong>None</strong></li>
                                    <li>Minimum Trading Days: <strong>1</strong></li>
                                    <li>Leverage up to: <strong>30:1</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ADD-ONS & SPECIALS -->
            <section class="challenge-panel">
                <div class="challenge-panel-header">
                    <h2>Add-Ons &amp; Specials</h2>
                    <p>Level up your challenge experience with optional upgrades and loyalty perks.</p>
                </div>

                <div class="extras-grid">
                    <div class="extras-column">
                        <h3>Add-Ons</h3>
                        <ul class="tag-list">
                            <li><strong>One day to pass</strong> – $19</li>
                            <li><strong>100% of profits</strong> – $49</li>
                            <li><strong>No stop loss requirement</strong> – $10</li>
                            <li><strong>Bundle all 3 + 1 free reset credit</strong> – $69</li>
                        </ul>
                    </div>
                    <div class="extras-column">
                        <h3>Specials</h3>
                        <ul class="tag-list">
                            <li>Login daily for <strong>5 consecutive days</strong> – get <strong>50% off</strong>
                                any challenge.</li>
                            <li>Every purchase includes a <strong>20% off</strong> coupon for your next challenge.
                            </li>
                            <li>Pass <strong>5 challenges</strong> – get a same-size challenge <strong>for
                                    free</strong>.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="challenge-panel payouts-panel">
                <div class="challenge-panel-header">
                    <h2>Payouts & Scaling (Funded Sim)</h2>
                    <p>Unlock elite payout structures and scale your funded account through consistent performance.
                    </p>
                </div>

                <div class="rules-block">
                    <h4>Payout Structure</h4>
                    <ul>
                        <li>First Payout: <strong>80%</strong></li>
                        <li>All Subsequent Payouts: <strong>90%</strong></li>
                        <li>Payout Frequency: <strong>Every 2 weeks</strong></li>
                        <li>First Payout Eligibility: <strong>Immediate</strong> after meeting requirements</li>
                    </ul>
                </div>

                <div class="rules-block">
                    <h4>Scaling Plan</h4>
                    <ul>
                        <li>Accounts scale up every time you complete <strong>3 successful payout cycles</strong>
                        </li>
                        <li>No rule violations during the cycle</li>
                        <li>Must meet firm’s consistency requirement</li>
                    </ul>
                </div>

                <div class="rules-block">
                    <h4>Consistency Requirement</h4>
                    <ul>
                        <li>No single day may account for more than <strong>40% of total profits</strong></li>
                        <li>Trader must demonstrate <strong>controlled risk</strong></li>
                        <li>AI Forge provides analytics, but <strong>final decisions are human-reviewed</strong>
                        </li>
                    </ul>
                </div>
            </section>

        </div>
    </section>
    </div>
    </section>



</main>

<?php include __DIR__ . "/partials/footer.php"; ?>
<?php include __DIR__ . '/partials/admin-panel.php'; ?>