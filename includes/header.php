<?php
// Header Component
// Includes navigation and age verification
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AQUASTRUCT - 100% Free-to-Play Entertainment Gaming Platform">
    <meta name="keywords" content="games, casino, entertainment, free-to-play, mines, dice, plinko">
    <meta name="author" content="AQUASTRUCT CONSTRUCTION PRIVATE LIMITED">
    <meta property="og:title" content="AQUASTRUCT - Play Free Casino Games">
    <meta property="og:description" content="100% Free-to-Play Entertainment Platform">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css?v=11.0">
    <link rel="icon" type="image/svg+xml" href="<?php echo SITE_URL; ?>/assets/images/favicon.svg">
</head>
<body>


    <!-- Header Navigation -->
    <header>
        <div class="header-container">
            <a href="<?php echo SITE_URL; ?>" class="logo">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo.webp" alt="<?php echo SITE_NAME; ?>" class="logo-image">
                <span><?php echo SITE_NAME; ?></span>
            </a>
            
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
            
            <nav id="navMenu">
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/">Home</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/pages/play.php">Play Now</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/pages/about.php">About Us</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/pages/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
