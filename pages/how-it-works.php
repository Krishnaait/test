<?php
require_once '../includes/config.php';
$page_title = "How It Works";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">How It Works</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <!-- Getting Started -->
    <div class="card" style="margin-bottom: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1.5rem;">🚀 Getting Started</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div style="text-align: center;">
                <div style="background: linear-gradient(135deg, var(--primary-color) 0%, #FFC700 100%); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem;">
                    1️⃣
                </div>
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Verify Your Age</h4>
                <p style="color: var(--text-secondary);">Confirm that you are 18 years or older to access the platform.</p>
            </div>

            <div style="text-align: center;">
                <div style="background: linear-gradient(135deg, var(--primary-color) 0%, #FFC700 100%); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem;">
                    2️⃣
                </div>
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Choose a Game</h4>
                <p style="color: var(--text-secondary);">Select from our 4 exciting games and start playing instantly.</p>
            </div>

            <div style="text-align: center;">
                <div style="background: linear-gradient(135deg, var(--primary-color) 0%, #FFC700 100%); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem;">
                    3️⃣
                </div>
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Play & Enjoy</h4>
                <p style="color: var(--text-secondary);">Have fun playing for free with virtual coins. No real money involved!</p>
            </div>
        </div>
    </div>

    <!-- Game Mechanics -->
    <div class="card" style="margin-bottom: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1.5rem;">🎮 Game Mechanics</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            <!-- Mines -->
            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 style="color: var(--primary-color); margin-bottom: 1rem;">💣 Mines</h4>
                <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                    A strategic game where you must avoid mines and reveal safe tiles.
                </p>
                <ul style="color: var(--text-secondary); margin-left: 1rem; font-size: 0.9rem;">
                    <li>✓ Choose difficulty level</li>
                    <li>✓ Reveal tiles strategically</li>
                    <li>✓ Avoid hidden mines</li>
                    <li>✓ Win virtual coins</li>
                </ul>
            </div>

            <!-- Dice -->
            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 style="color: var(--primary-color); margin-bottom: 1rem;">🎲 Dice</h4>
                <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                    A classic dice game where you predict the outcome.
                </p>
                <ul style="color: var(--text-secondary); margin-left: 1rem; font-size: 0.9rem;">
                    <li>✓ Predict dice results</li>
                    <li>✓ Multiple betting options</li>
                    <li>✓ Instant results</li>
                    <li>✓ Win virtual coins</li>
                </ul>
            </div>

            <!-- Chicken -->
            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 style="color: var(--primary-color); margin-bottom: 1rem;">🐔 Chicken</h4>
                <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                    Guide your chicken to victory through challenges.
                </p>
                <ul style="color: var(--text-secondary); margin-left: 1rem; font-size: 0.9rem;">
                    <li>✓ Interactive gameplay</li>
                    <li>✓ Progressive difficulty</li>
                    <li>✓ Collect rewards</li>
                    <li>✓ Win virtual coins</li>
                </ul>
            </div>

            <!-- Plinko -->
            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 style="color: var(--primary-color); margin-bottom: 1rem;">⭕ Plinko</h4>
                <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                    Drop the ball and watch it bounce to prizes.
                </p>
                <ul style="color: var(--text-secondary); margin-left: 1rem; font-size: 0.9rem;">
                    <li>✓ Physics-based gameplay</li>
                    <li>✓ Multiple paths</li>
                    <li>✓ Prize zones</li>
                    <li>✓ Win virtual coins</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Virtual Coins System -->
    <div class="card" style="margin-bottom: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1.5rem;">💰 Virtual Coins System</h2>
        
        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1.5rem; border-radius: 5px; margin-bottom: 1.5rem;">
            <p style="color: var(--text-secondary); line-height: 1.8;">
                <strong style="color: var(--secondary-color);">IMPORTANT:</strong> Virtual coins are used for entertainment purposes only. They have ZERO real money value and cannot be exchanged, sold, or cashed out.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
            <div>
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">🎁 Initial Coins</h4>
                <p style="color: var(--text-secondary);">You start with <?php echo INITIAL_COINS; ?> virtual coins to begin playing.</p>
            </div>

            <div>
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">🏆 Winning Coins</h4>
                <p style="color: var(--text-secondary);">Win additional virtual coins by playing games successfully.</p>
            </div>

            <div>
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">🎯 Betting</h4>
                <p style="color: var(--text-secondary);">Bet between <?php echo MIN_BET; ?> and <?php echo MAX_BET; ?> coins per game.</p>
            </div>

            <div>
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">📊 Leaderboards</h4>
                <p style="color: var(--text-secondary);">Compete with other players for entertainment purposes only.</p>
            </div>
        </div>
    </div>

    <!-- Key Features -->
    <div class="card" style="margin-bottom: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1.5rem;">✨ Key Features</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
            <div style="display: flex; gap: 1rem;">
                <span style="font-size: 2rem;">📱</span>
                <div>
                    <h4 style="color: var(--primary-color);">Mobile Responsive</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Play on any device - desktop, tablet, or mobile.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem;">
                <span style="font-size: 2rem;">⚡</span>
                <div>
                    <h4 style="color: var(--primary-color);">Lightning Fast</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Games load instantly with optimized performance.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem;">
                <span style="font-size: 2rem;">🔒</span>
                <div>
                    <h4 style="color: var(--primary-color);">Secure</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Your data is protected with industry-standard security.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem;">
                <span style="font-size: 2rem;">🎮</span>
                <div>
                    <h4 style="color: var(--primary-color);">Full-Screen Mode</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Play in full-screen for immersive experience.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem;">
                <span style="font-size: 2rem;">🎵</span>
                <div>
                    <h4 style="color: var(--primary-color);">Audio Effects</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Enjoy immersive sound effects and background music.</p>
                </div>
            </div>

            <div style="display: flex; gap: 1rem;">
                <span style="font-size: 2rem;">🌍</span>
                <div>
                    <h4 style="color: var(--primary-color);">24/7 Available</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">Play anytime, anywhere, from any location.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Compliance & Safety -->
    <div class="card" style="background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(255, 107, 53, 0.1) 100%); border: 2px solid var(--primary-color);">
        <h2 style="color: var(--primary-color); margin-bottom: 1.5rem;">🛡️ Compliance & Safety</h2>
        
        <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">
            <?php echo SITE_NAME; ?> is fully compliant with all applicable regulations and policies:
        </p>

        <ul style="color: var(--text-secondary); margin-left: 1rem; line-height: 2;">
            <li>✓ <strong style="color: var(--primary-color);">Google Ads Certified:</strong> Meets all advertising policy requirements</li>
            <li>✓ <strong style="color: var(--primary-color);">No Real Money:</strong> 100% free-to-play with zero monetary transactions</li>
            <li>✓ <strong style="color: var(--primary-color);">Age Restricted:</strong> 18+ only with strict age verification</li>
            <li>✓ <strong style="color: var(--primary-color);">Transparent:</strong> Clear disclosure of entertainment-only nature</li>
            <li>✓ <strong style="color: var(--primary-color);">Fair Games:</strong> Random outcomes with no skill-based payment advantages</li>
            <li>✓ <strong style="color: var(--primary-color);">Privacy Protected:</strong> GDPR and data protection compliant</li>
        </ul>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
