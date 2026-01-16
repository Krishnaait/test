<?php
require_once '../includes/config.php';
$page_title = "About Us";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">About <?php echo SITE_NAME; ?></h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <!-- Mission Section -->
    <div class="card" style="margin-bottom: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">🎯 Our Mission</h2>
        <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8;">
            At <?php echo SITE_NAME; ?>, our mission is to provide a world-class, free-to-play online gaming platform that brings joy and excitement to players worldwide. We believe in creating a safe, transparent, and enjoyable digital gaming experience where entertainment is the primary focus, with absolutely no real money involved.
        </p>
    </div>

    <!-- Values and Numbers Grid -->
    <div class="grid grid-2">
        <div class="card">
            <h3 style="color: var(--primary-color); margin-bottom: 1rem;">🎮 Our Values</h3>
            <ul style="color: var(--text-secondary); line-height: 2;">
                <li><strong style="color: var(--primary-color);">Transparency:</strong> We are completely transparent about our platform being entertainment-only with no real money value.</li>
                <li><strong style="color: var(--primary-color);">Safety:</strong> User safety and security are our top priorities.</li>
                <li><strong style="color: var(--primary-color);">Fun:</strong> We focus on delivering enjoyable gaming experiences.</li>
                <li><strong style="color: var(--primary-color);">Fairness:</strong> All games use professional algorithms for fair outcomes.</li>
            </ul>
        </div>

        <div class="card">
            <h3 style="color: var(--primary-color); margin-bottom: 1rem;">📊 By The Numbers</h3>
            <div style="color: var(--text-secondary);">
                <p style="margin-bottom: 1rem;">
                    <strong style="color: var(--primary-color); font-size: 1.5rem;">4</strong><br>
                    Exciting Games Available
                </p>
                <p style="margin-bottom: 1rem;">
                    <strong style="color: var(--primary-color); font-size: 1.5rem;">100%</strong><br>
                    Free-to-Play Experience
                </p>
                <p style="margin-bottom: 1rem;">
                    <strong style="color: var(--primary-color); font-size: 1.5rem;">24/7</strong><br>
                    Available Worldwide
                </p>
                <p>
                    <strong style="color: var(--primary-color); font-size: 1.5rem;">0</strong><br>
                    Real Money Transactions
                </p>
            </div>
        </div>
    </div>

    <!-- Platform Features -->
    <div class="card" style="margin-top: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">✨ Platform Features</h2>
        <div class="grid grid-3">
            <div>
                <h4 style="color: var(--primary-color);">📱 Mobile Responsive</h4>
                <p style="color: var(--text-secondary);">Play on any device - desktop, tablet, or mobile. Seamless gaming experience everywhere.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🎵 Immersive Sound</h4>
                <p style="color: var(--text-secondary);">Experience realistic game sounds and effects. Toggle audio on or off anytime.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🔓 No Registration</h4>
                <p style="color: var(--text-secondary);">Start playing instantly without any signup. No personal information required.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">⚖️ Fair Mechanics</h4>
                <p style="color: var(--text-secondary);">Professional algorithms ensure fair and transparent gameplay for all players.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🪙 Free Credits</h4>
                <p style="color: var(--text-secondary);">Start with free virtual credits. Reset anytime to enjoy unlimited gaming sessions.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🎯 Pure Entertainment</h4>
                <p style="color: var(--text-secondary);">Enjoy authentic casino-style games designed for fun and excitement. No real money involved.</p>
            </div>
        </div>
    </div>

    <!-- Our Games Section -->
    <div class="card" style="margin-top: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">🎰 Our Games</h2>
        <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">
            We offer four carefully designed games, each providing a unique entertainment experience:
        </p>
        <div class="grid grid-2">
            <div>
                <h4 style="color: var(--primary-color);">💣 Mines</h4>
                <p style="color: var(--text-secondary);">A strategic game where players must avoid mines and reveal safe tiles. Test your luck and decision-making skills in this thrilling challenge.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🎲 Dice</h4>
                <p style="color: var(--text-secondary);">A classic dice game where players predict outcomes. Simple, fast-paced, and thrilling entertainment with instant results.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🐔 Chicken</h4>
                <p style="color: var(--text-secondary);">Guide your chicken to victory! An interactive and fun game with progressive challenges and engaging gameplay mechanics.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">⭕ Plinko</h4>
                <p style="color: var(--text-secondary);">Drop the ball and watch it bounce through pegs to reach different prize zones. Classic arcade fun with physics-based gameplay.</p>
            </div>
        </div>
    </div>

    <!-- Company Information -->
    <div class="card" style="margin-top: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">🏢 Company Information</h2>
        <div style="color: var(--text-secondary); line-height: 2;">
            <p><strong style="color: var(--primary-color);">Legal Name:</strong> <?php echo COMPANY_NAME; ?></p>
            <p><strong style="color: var(--primary-color);">Domain:</strong> <?php echo SITE_DOMAIN; ?></p>
            <p><strong style="color: var(--primary-color);">CIN:</strong> <?php echo COMPANY_CIN; ?></p>
            <p><strong style="color: var(--primary-color);">GST ID:</strong> <?php echo COMPANY_GST; ?></p>
        </div>
    </div>

    <!-- Important Notice -->
    <div class="card" style="margin-top: 2rem; background: linear-gradient(135deg, rgba(255, 215, 0, 0.05) 0%, rgba(255, 107, 53, 0.05) 100%); border: 2px solid var(--primary-color);">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">⚠️ Important Notice</h2>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            <?php echo SITE_NAME; ?> is a 100% free-to-play online entertainment platform. We maintain the highest standards of transparency and user protection. All games are designed purely for entertainment purposes with no real money value. Virtual credits cannot be exchanged for real currency or prizes.
        </p>
        <ul style="color: var(--text-secondary); line-height: 2; margin-top: 1rem;">
            <li>✓ 100% Free-to-Play (No Real Money)</li>
            <li>✓ Age Restriction: 18+ Only</li>
            <li>✓ No Registration Required</li>
            <li>✓ Complete Legal Documentation</li>
            <li>✓ Privacy & Data Protection</li>
            <li>✓ Responsible Gaming Commitment</li>
        </ul>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
