<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?= $pageTitle ?? 'Diamond Hands Trading Co.' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- GLOBAL CSS -->
    <link rel="stylesheet" href="/diamondhands/assets/css/style.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>

<header class="dh-header">
    <div class="dh-header-inner">
        <div class="dh-logo-wrap">
            <div class="dh-logo-icon">◆</div>
            <span class="dh-logo-text">DIAMOND HANDS</span>
        </div>

        <!-- DESKTOP NAV -->
        <nav class="dh-nav">
            <a href="/diamondhands/home.php" class="<?= $active === 'home' ? 'active' : '' ?>">Home</a>
            <a href="#">Rankings</a>
            <a href="/diamondhands/challenge.php" class="<?= $active === 'challenge' ? 'active' : '' ?>">Challenges</a>
            <a href="/diamondhands/aiforge.php" class="<?= $active === 'aiforge' ? 'active' : '' ?>">AI Forge</a>
            <a href="#">Join Now</a>
        </nav>

        <!-- MOBILE TOGGLE -->
        <button
            class="dh-header-toggle"
            aria-label="Open navigation"
            aria-expanded="false"
        >
            ☰
        </button>
    </div>
</header>

<!-- MOBILE NAV -->
<nav id="mobileNav" class="dh-mobile-nav" aria-hidden="true">
    <a href="/diamondhands/home.php">Home</a>
    <a href="#">Rankings</a>
    <a href="/diamondhands/challenge.php">Challenges</a>
    <a href="/diamondhands/aiforge.php">AI Forge</a>
    <a href="#">Join Now</a>
</nav>

<!-- MOBILE BACKDROP -->
<div class="dh-mobile-backdrop"></div>
