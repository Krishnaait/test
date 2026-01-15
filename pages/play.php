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

    <div class="grid grid-2">
        <!-- Mines Game -->
        <div class="card game-card">
            <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 250px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; position: relative; overflow: hidden;">
                <span style="font-size: 5rem; z-index: 1;">💣</span>
                <div style="position: absolute; top: 10px; right: 10px; background: var(--secondary-color); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: bold;">
                    ⭐ POPULAR
                </div>
            </div>
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
            <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); height: 250px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                <span style="font-size: 5rem;">🎲</span>
            </div>
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
            <div style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); height: 250px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                <span style="font-size: 5rem;">🐔</span>
            </div>
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
            <div style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); height: 250px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                <span style="font-size: 5rem;">⭕</span>
            </div>
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
</section>

<?php include '../includes/footer.php'; ?>
