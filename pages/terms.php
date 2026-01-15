<?php
require_once '../includes/config.php';
$page_title = "Terms & Conditions";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">Terms & Conditions</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="card">
        <p style="color: var(--text-secondary); margin-bottom: 1rem;">
            <strong>Last Updated:</strong> <?php echo get_last_updated(); ?>
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">1. Acceptance of Terms</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            By accessing and using <?php echo SITE_NAME; ?> (the "Platform"), you agree to be bound by these Terms & Conditions. If you do not agree to these terms, please do not use this Platform.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">2. Age Requirement</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            You must be at least 18 years of age to use this Platform. By confirming your age, you certify that you are 18 years or older. We reserve the right to verify age at any time.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">3. Entertainment-Only Platform</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            <?php echo SITE_NAME; ?> is explicitly a free-to-play entertainment platform. This is NOT gambling. Virtual coins have ZERO real money value and cannot be exchanged, sold, or cashed out. All games are for entertainment purposes only.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">4. Virtual Coins</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Virtual coins are digital entertainment currency with no real-world value. You cannot:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Exchange virtual coins for real money</li>
            <li>Sell or trade virtual coins</li>
            <li>Cash out or withdraw virtual coins</li>
            <li>Use virtual coins outside this Platform</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">5. User Conduct</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            You agree not to:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Violate any applicable laws or regulations</li>
            <li>Engage in abusive, harassing, or offensive behavior</li>
            <li>Attempt to hack, manipulate, or cheat the games</li>
            <li>Use bots or automated tools</li>
            <li>Share your account with others</li>
            <li>Engage in fraudulent activities</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">6. Intellectual Property</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            All content, games, graphics, and materials on this Platform are the intellectual property of <?php echo COMPANY_NAME; ?>. You may not reproduce, distribute, or transmit any content without permission.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">7. Limitation of Liability</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            <?php echo COMPANY_NAME; ?> is provided "as is" without warranties. We are not liable for any indirect, incidental, or consequential damages arising from your use of the Platform.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">8. Termination</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We reserve the right to terminate or suspend access to the Platform at any time for violation of these terms or for any other reason.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">9. Changes to Terms</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We may update these Terms & Conditions at any time. Continued use of the Platform constitutes acceptance of updated terms.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">10. Contact Information</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            For questions about these Terms & Conditions, please contact us at:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
            <strong style="color: var(--primary-color);">Phone:</strong> <a href="tel:<?php echo COMPANY_PHONE; ?>" style="color: var(--primary-color);"><?php echo COMPANY_PHONE; ?></a>
        </p>

        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1rem; border-radius: 5px; margin-top: 2rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                <strong style="color: var(--secondary-color);">© <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?></strong><br>
                All Rights Reserved. This is a free-to-play entertainment platform. No real money involved.
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
