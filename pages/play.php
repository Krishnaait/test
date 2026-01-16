<?php
require_once '../includes/config.php';
$page_title = "Play Now";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">🎮 Play Our Games</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <!-- Featured Casino Image -->
    <div style="margin-bottom: 3rem; border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-primary); box-shadow: var(--shadow-gold);">
        <img src="<?php echo SITE_URL; ?>/assets/images/casino_entrance_1.jpg" alt="Casino Gaming Floor" style="width: 100%; height: 400px; object-fit: cover;">
    </div>

    <div class="grid grid-2">
        <!-- Mines Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_mines.jpg" alt="Mines Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); font-size: 1.5rem;">Mines</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                Avoid the mines and reveal safe tiles to win big! Choose your risk level and strategy.
            </p>
            <div style="background: rgba(255, 215, 0, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.9rem;">
                <strong style="color: var(--primary-color);">Game Features:</strong>
                <ul style="margin-top: 0.5rem; margin-left: 1rem; color: var(--text-secondary);">
                    <li>✓ Multiple difficulty levels</li>
                    <li>✓ Real-time gameplay</li>
                    <li>✓ Full-screen mode</li>
                </ul>
            </div>
            <a href="../games/mines.php" class="btn btn-primary" style="width: 100%;">🎯 Play Mines</a>
        </div>

        <!-- Dice Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_dice.jpg" alt="Dice Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); font-size: 1.5rem;">Dice</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                Roll the dice and predict the outcome for instant wins! Simple yet thrilling gameplay.
            </p>
            <div style="background: rgba(255, 215, 0, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.9rem;">
                <strong style="color: var(--primary-color);">Game Features:</strong>
                <ul style="margin-top: 0.5rem; margin-left: 1rem; color: var(--text-secondary);">
                    <li>✓ Instant results</li>
                    <li>✓ Multiple betting options</li>
                    <li>✓ Full-screen mode</li>
                </ul>
            </div>
            <a href="../games/dice.php" class="btn btn-primary" style="width: 100%;">🎯 Play Dice</a>
        </div>

        <!-- Chicken Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/live_casino_table.jpg" alt="Chicken Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); font-size: 1.5rem;">Chicken</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                Guide the chicken to victory and collect your rewards! Fun and engaging gameplay.
            </p>
            <div style="background: rgba(255, 215, 0, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.9rem;">
                <strong style="color: var(--primary-color);">Game Features:</strong>
                <ul style="margin-top: 0.5rem; margin-left: 1rem; color: var(--text-secondary);">
                    <li>✓ Interactive gameplay</li>
                    <li>✓ Progressive difficulty</li>
                    <li>✓ Full-screen mode</li>
                </ul>
            </div>
            <a href="../games/chicken.php" class="btn btn-primary" style="width: 100%;">🎯 Play Chicken</a>
        </div>

        <!-- Plinko Game -->
        <div class="card game-card">
            <img src="<?php echo SITE_URL; ?>/assets/images/game_plinko.jpg" alt="Plinko Game" style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px; margin-bottom: 1.5rem;">
            <h3 style="color: var(--primary-color); font-size: 1.5rem;">Plinko</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                Drop the ball and watch it bounce to amazing prizes! Classic arcade fun.
            </p>
            <div style="background: rgba(255, 215, 0, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1rem; font-size: 0.9rem;">
                <strong style="color: var(--primary-color);">Game Features:</strong>
                <ul style="margin-top: 0.5rem; margin-left: 1rem; color: var(--text-secondary);">
                    <li>✓ Physics-based gameplay</li>
                    <li>✓ Multiple paths</li>
                    <li>✓ Full-screen mode</li>
                </ul>
            </div>
            <a href="../games/plinko.php" class="btn btn-primary" style="width: 100%;">🎯 Play Plinko</a>
        </div>
    </div>

    <!-- Casino Atmosphere Section -->
    <div style="margin-top: 3rem;">
        <h2 style="text-align: center; color: var(--primary-color); margin-bottom: 2rem;">🌟 Premium Gaming Atmosphere</h2>
        <div class="grid grid-3" style="gap: 1.5rem;">
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="<?php echo SITE_URL; ?>/assets/images/luxurious_poker_room.jpg" alt="Poker Room" style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 1rem; text-align: center;">
                    <h4 style="color: var(--primary-color);">🎩 Luxury Rooms</h4>
                </div>
            </div>

            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="<?php echo SITE_URL; ?>/assets/images/roulette_table_close_up.jpg" alt="Roulette Table" style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 1rem; text-align: center;">
                    <h4 style="color: var(--primary-color);">🎰 Real Tables</h4>
                </div>
            </div>

            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="<?php echo SITE_URL; ?>/assets/images/modern_casino_interior.jpg" alt="Modern Interior" style="width: 100%; height: 180px; object-fit: cover;">
                <div style="padding: 1rem; text-align: center;">
                    <h4 style="color: var(--primary-color);">✨ Modern Design</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="card" style="margin-top: 3rem; text-align: center; background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(255, 107, 53, 0.1) 100%); border: 2px solid var(--primary-color);">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">🎊 Ready for Action?</h2>
        <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 1.5rem;">
            Choose your favorite game above and start playing now! All games are 100% free with no registration required.
        </p>
        <p style="font-size: 0.9rem; color: var(--text-secondary);">
            Remember: This is entertainment only. Virtual coins have no real money value.
        </p>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
