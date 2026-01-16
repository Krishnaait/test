<?php
require_once '../includes/config.php';
$page_title = "Play Now";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">🎮 Play Now</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="card" style="margin-bottom: 2rem; text-align: center;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">Choose Your Game</h2>
        <p style="color: var(--text-secondary); font-size: 1.1rem;">
            Select from our collection of exciting casino-style games. All games are free-to-play with no real money involved. Start with free virtual credits and enjoy unlimited entertainment!
        </p>
    </div>

    <!-- Game Cards Grid -->
    <div class="grid grid-2">
        <!-- Mines Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_mines.webp" alt="Mines Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>💣 Mines</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p style="color: var(--text-secondary); margin-top: 1rem;">
                Navigate through a grid of tiles while avoiding hidden mines. Each safe tile you reveal increases your score. Test your luck and strategy in this thrilling game of risk and reward!
            </p>
            <a href="../games/mines.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Mines</a>
        </div>

        <!-- Dice Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_dice.webp" alt="Dice Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>🎲 Dice</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p style="color: var(--text-secondary); margin-top: 1rem;">
                Roll the dice and predict the outcome! A classic game of chance with instant results. Choose your prediction and watch as the dice roll to determine your fate. Simple, fast, and exciting!
            </p>
            <a href="../games/dice.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Dice</a>
        </div>

        <!-- Chicken Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/live_casino_table.webp" alt="Chicken Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>🐔 Chicken</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p style="color: var(--text-secondary); margin-top: 1rem;">
                Guide your chicken through a challenging path! An interactive game where timing and decision-making are key. Collect rewards as you progress and see how far you can go!
            </p>
            <a href="../games/chicken.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Chicken</a>
        </div>

        <!-- Plinko Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_plinko.webp" alt="Plinko Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1rem;">
            <h3>⭕ Plinko</h3>
            <span class="game-limit">PLAY LIMIT</span>
            <span class="game-free">Free Play</span>
            <p style="color: var(--text-secondary); margin-top: 1rem;">
                Drop the ball and watch it bounce through pegs! A physics-based game where the ball's path determines your prize. Classic arcade fun with unpredictable outcomes every time!
            </p>
            <a href="../games/plinko.php" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Play Plinko</a>
        </div>
    </div>

    <!-- How to Play Section -->
    <div class="card" style="margin-top: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">📖 How to Play</h2>
        <div class="grid grid-2">
            <div>
                <h4 style="color: var(--primary-color);">1️⃣ Choose a Game</h4>
                <p style="color: var(--text-secondary);">Select any game from the options above. Each game offers unique gameplay mechanics and entertainment value.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">2️⃣ Start with Free Credits</h4>
                <p style="color: var(--text-secondary);">You'll receive free virtual credits to start playing immediately. No registration or payment required.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">3️⃣ Play and Enjoy</h4>
                <p style="color: var(--text-secondary);">Follow the game instructions and enjoy the entertainment. All games are designed for pure fun with no real money involved.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">4️⃣ Reset Anytime</h4>
                <p style="color: var(--text-secondary);">If you run out of credits, simply reset your balance and continue playing. Unlimited entertainment guaranteed!</p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="card" style="margin-top: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">✨ Game Features</h2>
        <div class="grid grid-3">
            <div style="text-align: center;">
                <span style="font-size: 3rem;">🎮</span>
                <h4 style="color: var(--primary-color); margin-top: 0.5rem;">Professional Graphics</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">High-quality visuals and smooth animations</p>
            </div>
            <div style="text-align: center;">
                <span style="font-size: 3rem;">🔊</span>
                <h4 style="color: var(--primary-color); margin-top: 0.5rem;">Immersive Sound</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Realistic audio effects enhance gameplay</p>
            </div>
            <div style="text-align: center;">
                <span style="font-size: 3rem;">📱</span>
                <h4 style="color: var(--primary-color); margin-top: 0.5rem;">Mobile Friendly</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Play on any device, anywhere, anytime</p>
            </div>
            <div style="text-align: center;">
                <span style="font-size: 3rem;">⚡</span>
                <h4 style="color: var(--primary-color); margin-top: 0.5rem;">Instant Loading</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Fast performance with no delays</p>
            </div>
            <div style="text-align: center;">
                <span style="font-size: 3rem;">🎯</span>
                <h4 style="color: var(--primary-color); margin-top: 0.5rem;">Fair Algorithms</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Transparent and fair gameplay mechanics</p>
            </div>
            <div style="text-align: center;">
                <span style="font-size: 3rem;">🆓</span>
                <h4 style="color: var(--primary-color); margin-top: 0.5rem;">100% Free</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">No real money, no hidden costs</p>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="card" style="margin-top: 2rem; text-align: center; background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(255, 107, 53, 0.1) 100%); border: 2px solid var(--primary-color);">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">Ready to Start?</h2>
        <p style="color: var(--text-secondary); font-size: 1.1rem; margin-bottom: 2rem;">
            Pick your favorite game and start playing now! All games are free with unlimited entertainment.
        </p>
        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <a href="../games/mines.php" class="btn btn-primary">💣 Play Mines</a>
            <a href="../games/dice.php" class="btn btn-primary">🎲 Play Dice</a>
            <a href="../games/chicken.php" class="btn btn-primary">🐔 Play Chicken</a>
            <a href="../games/plinko.php" class="btn btn-primary">⭕ Play Plinko</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
