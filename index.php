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

<!-- Luxury Casino Showcase Section -->
<section style="margin-top: 4rem;">
    <h2 class="section-title">
        <span class="highlight">Premium Casino</span><br>Experience
    </h2>
    <p class="section-subtitle">Step into a world of luxury and excitement with our professionally designed casino platform featuring stunning visuals and authentic gameplay.</p>

    <div class="grid grid-2" style="gap: 2rem; margin-top: 2rem;">
        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/casino_entrance_1.jpg" alt="Grand Casino Entrance" style="width: 100%; height: 350px; object-fit: cover;">
            <div style="padding: 1.5rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">🏛️ Grand Entrance</h3>
                <p style="color: var(--text-secondary);">Experience the grandeur of a world-class casino from the comfort of your home. Our platform brings the authentic casino atmosphere to your screen.</p>
            </div>
        </div>

        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/casino_chandelier.jpg" alt="Luxury Casino Interior" style="width: 100%; height: 350px; object-fit: cover;">
            <div style="padding: 1.5rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">✨ Luxury Design</h3>
                <p style="color: var(--text-secondary);">Immerse yourself in elegantly designed gaming spaces with crystal chandeliers and premium aesthetics that rival real casinos.</p>
            </div>
        </div>
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
            <img src="<?php echo SITE_URL; ?>/assets/images/game_mines.jpg" alt="Mines Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Mines</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Avoid the mines and reveal safe tiles to win big!</p>
            <a href="games/mines.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>

        <!-- Dice Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_dice.jpg" alt="Dice Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Dice</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Roll the dice and predict the outcome for instant wins!</p>
            <a href="games/dice.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>

        <!-- Chicken Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/live_casino_table.jpg" alt="Chicken Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Chicken</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Guide the chicken to victory and collect your rewards!</p>
            <a href="games/chicken.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>

        <!-- Plinko Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_plinko.jpg" alt="Plinko Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>Plinko</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p>Drop the ball and watch it bounce to amazing prizes!</p>
            <a href="games/plinko.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Now</a>
        </div>
    </div>
</section>

<!-- Premium Features with Images Section -->
<section style="margin-top: 4rem;">
    <h2 class="section-title">
        <span class="highlight">World-Class</span><br>Features
    </h2>
    <p class="section-subtitle">Discover what makes our platform the ultimate destination for premium casino entertainment.</p>

    <div class="grid grid-3" style="gap: 2rem; margin-top: 2rem;">
        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/luxurious_poker_room.jpg" alt="VIP Gaming" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 1.5rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">🎩 VIP Experience</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">Enjoy premium gaming in luxurious virtual environments designed to replicate high-end casino experiences.</p>
            </div>
        </div>

        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/casino_bar_lounge.jpg" alt="Social Gaming" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 1.5rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">🍸 Lounge Atmosphere</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">Relax and play in sophisticated lounge-style settings with premium bar aesthetics and ambient vibes.</p>
            </div>
        </div>

        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/roulette_table_close_up.jpg" alt="Authentic Tables" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 1.5rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">🎰 Real Tables</h3>
                <p style="color: var(--text-secondary); font-size: 0.95rem;">Play on authentic casino tables with professional-grade graphics and realistic gameplay mechanics.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section style="margin-top: 4rem;">
    <h2 class="section-title">
        <span class="highlight">Why Play Our</span><br>Casino
    </h2>
    <p class="section-subtitle"><?php echo SITE_NAME; ?> offers a premium social gaming experience with no real money involved. Enjoy authentic casino entertainment in a safe, secure environment designed for pure fun and excitement.</p>

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
                <span style="font-size: 3rem;">🌍</span>
            </div>
            <h3 style="color: var(--primary-color); text-align: center;">Global Access</h3>
            <p style="text-align: center; color: var(--text-secondary);">
                Play from anywhere in the world, 24/7.
            </p>
        </div>
    </div>
</section>

<!-- Modern Casino Interior Showcase -->
<section style="margin-top: 4rem;">
    <div class="card" style="padding: 0; overflow: hidden;">
        <img src="<?php echo SITE_URL; ?>/assets/images/modern_casino_interior.jpg" alt="Modern Casino Interior" style="width: 100%; height: 400px; object-fit: cover;">
        <div style="padding: 2rem; background: linear-gradient(135deg, rgba(26, 26, 46, 0.95) 0%, rgba(26, 26, 46, 0.98) 100%);">
            <h2 style="color: var(--primary-color); margin-bottom: 1rem; text-align: center;">🌟 Modern Gaming Environment</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); text-align: center; max-width: 800px; margin: 0 auto;">
                Our platform features cutting-edge design with modern casino interiors, neon aesthetics, and immersive atmospheres that transport you to the heart of Las Vegas from anywhere in the world.
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
