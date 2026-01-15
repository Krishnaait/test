<?php
// Header Component
// Includes navigation and age verification
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apna Fantasy - 100% Free-to-Play Entertainment Gaming Platform">
    <meta name="keywords" content="games, casino, entertainment, free-to-play, mines, dice, plinko">
    <meta name="author" content="Apna Fantasy Entertainment">
    <meta property="og:title" content="Apna Fantasy - Play Free Casino Games">
    <meta property="og:description" content="100% Free-to-Play Entertainment Platform">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>/assets/images/favicon.ico">
</head>
<body>
    <!-- Age Gate Modal (if not verified) -->
    <?php if (!is_age_verified()): ?>
    <div id="ageGateModal" class="modal">
        <div class="modal-content">
            <h2>⚠️ Age Verification</h2>
            <p>This platform is for users 18 years and older.</p>
            <p>By clicking "I Confirm", you certify that you are 18+ years old.</p>
            <p style="font-size: 0.9rem; color: var(--text-secondary); margin-top: 1.5rem;">
                This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value.
            </p>
            <div class="modal-buttons">
                <button class="btn-confirm" onclick="confirmAge()">✓ I Confirm (18+)</button>
                <button class="btn-deny" onclick="denyAge()">✗ I'm Under 18</button>
            </div>
        </div>
    </div>

    <script>
        function confirmAge() {
            // Store age verification in localStorage
            localStorage.setItem('ageVerified', 'true');
            // Hide the modal
            const modal = document.getElementById('ageGateModal');
            if (modal) {
                modal.style.display = 'none';
            }
            // Also try to store in session via PHP
            fetch('<?php echo SITE_URL; ?>/includes/verify-age.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ verified: true })
            }).catch(err => console.log('Age verification logged'));
        }

        function denyAge() {
            alert('You must be 18+ to access this platform.');
            window.location.href = 'https://www.google.com';
        }
        
        // Check if already verified
        window.addEventListener('load', function() {
            if (localStorage.getItem('ageVerified') === 'true') {
                const modal = document.getElementById('ageGateModal');
                if (modal) {
                    modal.style.display = 'none';
                }
            }
        });
    </script>
    <?php endif; ?>

    <!-- Header Navigation -->
    <header>
        <div class="header-container">
            <a href="<?php echo SITE_URL; ?>" class="logo">
                <span class="logo-icon">🎰</span>
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
