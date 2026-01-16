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

    <!-- Hero Image -->
    <div style="margin-bottom: 3rem; border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-primary); box-shadow: var(--shadow-gold);">
        <img src="<?php echo SITE_URL; ?>/assets/images/casino_chandelier.jpg" alt="Luxury Casino" style="width: 100%; height: 450px; object-fit: cover;">
    </div>

    <!-- Mission Section -->
    <div class="card" style="margin-bottom: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">🎯 Our Mission</h2>
        <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8;">
            At <?php echo SITE_NAME; ?>, our mission is to provide a world-class, free-to-play entertainment gaming platform that brings joy and excitement to players worldwide. We believe in creating a safe, transparent, and enjoyable gaming experience where entertainment is the primary focus, with absolutely no real money involved.
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
                <li><strong style="color: var(--primary-color);">Fairness:</strong> All games are fair and use random outcomes.</li>
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

    <!-- Casino Environment Showcase -->
    <div class="grid grid-3" style="gap: 1.5rem; margin-top: 2rem;">
        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/casino_entrance_2.jpg" alt="Casino Entrance" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 1rem;">
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">🚪 Grand Entrance</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Modern glass architecture with premium aesthetics.</p>
            </div>
        </div>

        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/casino_lounge_seating.jpg" alt="VIP Lounge" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 1rem;">
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">🛋️ VIP Lounge</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Luxurious seating areas for ultimate comfort.</p>
            </div>
        </div>

        <div class="card" style="padding: 0; overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>/assets/images/casino_interior_1.jpg" alt="Casino Interior" style="width: 100%; height: 200px; object-fit: cover;">
            <div style="padding: 1rem;">
                <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">🌟 Neon Vibes</h4>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Vibrant neon-lit gaming floors with energy.</p>
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

    <!-- Our Games Section -->
    <div class="card" style="margin-top: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">🎰 Our Games</h2>
        <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">
            We offer four carefully designed games, each providing a unique entertainment experience:
        </p>
        <div class="grid grid-2">
            <div>
                <h4 style="color: var(--primary-color);">💣 Mines</h4>
                <p style="color: var(--text-secondary);">A strategic game where players must avoid mines and reveal safe tiles. Test your luck and decision-making skills.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🎲 Dice</h4>
                <p style="color: var(--text-secondary);">A classic dice game where players predict outcomes. Simple, fast-paced, and thrilling entertainment.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">🐔 Chicken</h4>
                <p style="color: var(--text-secondary);">Guide your chicken to victory! An interactive and fun game with progressive challenges.</p>
            </div>
            <div>
                <h4 style="color: var(--primary-color);">⭕ Plinko</h4>
                <p style="color: var(--text-secondary);">Drop the ball and watch it bounce through pegs to reach different prize zones. Classic arcade fun.</p>
            </div>
        </div>
    </div>

    <!-- Compliance Section -->
    <div class="card" style="margin-top: 2rem; background: linear-gradient(135deg, rgba(255, 215, 0, 0.05) 0%, rgba(255, 107, 53, 0.05) 100%); border: 2px solid var(--primary-color);">
        <h2 style="color: var(--primary-color); margin-bottom: 1rem;">✅ Compliance & Certifications</h2>
        <p style="color: var(--text-secondary); margin-bottom: 1rem;">
            <?php echo SITE_NAME; ?> is fully compliant with Google Ads policies and international gaming regulations. We maintain the highest standards of transparency and user protection.
        </p>
        <ul style="color: var(--text-secondary); line-height: 2;">
            <li>✓ Google Ads Certified</li>
            <li>✓ 100% Free-to-Play (No Real Money)</li>
            <li>✓ Age Restriction: 18+ Only</li>
            <li>✓ Complete Legal Documentation</li>
            <li>✓ Privacy & Data Protection</li>
            <li>✓ Responsible Gaming Commitment</li>
        </ul>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
