<?php
require_once 'includes/config.php';
$page_title = "Home";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <div class="entertainment-badge">🎮 100% FREE-TO-PLAY ENTERTAINMENT</div>
        <h1><span class="highlight">Experience Gaming</span><br>Like Never Before</h1>
        <p>We create vibrant, handcrafted social games designed purely for joy and entertainment. No real money. No financial transactions. Just a completely risk-free space filled with good vibes and play.</p>
        
        <div class="entertainment-message">
            <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
        </div>

        <a href="pages/play.php" class="btn btn-primary">🎰 Play Now</a>
        <a href="pages/about.php" class="btn btn-outline" style="margin-left: 1rem;">Learn More</a>
    </div>
</section>

<!-- Featured Games Section -->
<section style="margin-top: 4rem;">
    <h2 class="section-title">
        <span class="highlight">Top Awesome</span><br>Games
    </h2>
    <p class="section-subtitle">Experience the thrill of premium casino games. Free-to-play entertainment with stunning visuals and authentic gameplay.</p>

    <div class="grid grid-4">
        <!-- Mines Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_mines.webp" alt="Mines Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Mines</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Avoid the mines and reveal safe tiles to win big!</p>
            <a href="games/mines.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>

        <!-- Dice Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_dice.webp" alt="Dice Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Dice</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Roll the dice and predict the outcome for instant wins!</p>
            <a href="games/dice.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>

        <!-- Chicken Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/live_casino_table.webp" alt="Chicken Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Chicken</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Guide the chicken to victory and collect your rewards!</p>
            <a href="games/chicken.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>

        <!-- Plinko Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_plinko.webp" alt="Plinko Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Plinko</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Drop the ball and watch it bounce to amazing prizes!</p>
            <a href="games/plinko.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section style="margin-top: 4rem;">
    <h2 class="section-title">
        <span class="highlight">Why Play Our</span><br>Platform
    </h2>
    <p class="section-subtitle"><?php echo SITE_NAME; ?> offers a premium online gaming experience with no real money involved. Enjoy authentic casino-style entertainment in a safe, secure digital environment designed for pure fun and excitement.</p>

    <div class="grid grid-3">
        <div class="card">
            <div style="text-align: center; margin-bottom: 1rem;">
                <span style="font-size: 3rem;">✅</span>
            </div>
            <h3 style="color: var(--primary-color); text-align: center;">100% Free-to-Play</h3>
            <p style="text-align: center; color: var(--text-secondary);">
                No real money involved. Play purely for entertainment and fun.
            </p>
        </div>

        <div class="card">
            <div style="text-align: center; margin-bottom: 1rem;">
                <span style="font-size: 3rem;">🎮</span>
            </div>
            <h3 style="color: var(--primary-color); text-align: center;">Multiple Games</h3>
            <p style="text-align: center; color: var(--text-secondary);">
                Choose from 4 exciting games with different gameplay styles.
            </p>
        </div>

        <div class="card">
            <div style="text-align: center; margin-bottom: 1rem;">
                <span style="font-size: 3rem;">📱</span>
            </div>
            <h3 style="color: var(--primary-color); text-align: center;">Play Anywhere</h3>
            <p style="text-align: center; color: var(--text-secondary);">
                Fully responsive design works on desktop, tablet, and mobile.
            </p>
        </div>

        <div class="card">
            <div style="text-align: center; margin-bottom: 1rem;">
                <span style="font-size: 3rem;">🔒</span>
            </div>
            <h3 style="color: var(--primary-color); text-align: center;">Safe & Secure</h3>
            <p style="text-align: center; color: var(--text-secondary);">
                Your privacy and security are our top priority.
            </p>
        </div>

        <div class="card">
            <div style="text-align: center; margin-bottom: 1rem;">
                <span style="font-size: 3rem;">⚡</span>
            </div>
            <h3 style="color: var(--primary-color); text-align: center;">Lightning Fast</h3>
            <p style="text-align: center; color: var(--text-secondary);">
                Optimized for speed with instant game loading.
            </p>
        </div>

        <div class="card">
            <div style="text-align: center; margin-bottom: 1rem;">
                <span style="font-size: 3rem;">🎯</span>
            </div>
            <h3 style="color: var(--primary-color); text-align: center;">Fair Gameplay</h3>
            <p style="text-align: center; color: var(--text-secondary);">
                Professional algorithms ensure fair and transparent gameplay.
            </p>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section style="margin-top: 4rem; text-align: center;">
    <div class="card" style="background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(255, 107, 53, 0.1) 100%); border: 2px solid var(--primary-color);">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">Ready to Play?</h2>
        <p style="font-size: 1.2rem; color: var(--text-secondary); margin-bottom: 2rem;">
            Join thousands of players enjoying our free-to-play games!
        </p>
        <a href="pages/play.php" class="btn btn-primary btn-lg" style="padding: 1.2rem 2.5rem; font-size: 1.1rem;">
            🎰 Start Playing Now
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
