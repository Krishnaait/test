<?php
require_once '../includes/config.php';
$page_title = "Terms & Conditions";
include '../includes/header.php';
?>

<section class="page-content">
    <h1 class="page-header">Terms & Conditions</h1>
    
    <div class="page-disclaimer">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="page-card">
        <p>
            <strong>Last Updated:</strong> <?php echo get_last_updated(); ?>
        </p>

        <h3>Acceptance of Terms</h3>
        <p>
            By accessing and using <?php echo SITE_NAME; ?> (the "Platform"), operated by <?php echo COMPANY_NAME; ?>, you agree to be bound by these Terms & Conditions. If you do not agree to these terms, please do not use this Platform.
        </p>

        <h3>1. Age Requirement</h3>
        <p>
            You must be at least 18 years of age to use this Platform. By confirming your age, you certify that you are 18 years or older. We reserve the right to verify age at any time and may request proof of age.
        </p>

        <h3>2. Entertainment-Only Platform</h3>
        <p>
            <?php echo SITE_NAME; ?> is explicitly a free-to-play entertainment platform. Important clarifications:
        </p>
        <ul>
            <li><strong>This is NOT gambling</strong> - No real money is involved at any time</li>
            <li><strong>Virtual coins have ZERO real money value</strong> - Cannot be exchanged, sold, or cashed out</li>
            <li><strong>No prizes or winnings</strong> - All games are purely for entertainment</li>
            <li><strong>No financial transactions</strong> - You cannot deposit or withdraw money</li>
        </ul>

        <h3>3. Virtual Coins</h3>
        <p>
            Virtual coins are digital entertainment currency with absolutely no real-world value. You explicitly cannot:
        </p>
        <ul>
            <li>Exchange virtual coins for real money</li>
            <li>Sell, trade, or transfer virtual coins to others</li>
            <li>Cash out or withdraw virtual coins</li>
            <li>Use virtual coins outside this Platform</li>
            <li>Claim any monetary value for virtual coins</li>
        </ul>

        <h3>4. User Conduct and Responsibilities</h3>
        <p>
            When using the Platform, you agree not to:
        </p>
        <ul>
            <li>Violate any applicable local, state, national, or international laws</li>
            <li>Engage in abusive, harassing, threatening, or offensive behavior</li>
            <li>Attempt to hack, manipulate, exploit, or cheat the games</li>
            <li>Use bots, scripts, or automated tools</li>
            <li>Share your account credentials with others</li>
            <li>Engage in fraudulent or deceptive activities</li>
            <li>Interfere with other users' enjoyment of the Platform</li>
        </ul>

        <h3>5. Intellectual Property Rights</h3>
        <p>
            All content, games, graphics, logos, designs, and materials on this Platform are the exclusive intellectual property of <?php echo COMPANY_NAME; ?>. You may not:
        </p>
        <ul>
            <li>Reproduce, copy, or duplicate any content</li>
            <li>Distribute or transmit content without written permission</li>
            <li>Create derivative works based on Platform content</li>
            <li>Use Platform content for commercial purposes</li>
        </ul>

        <h3>6. Platform Availability</h3>
        <p>
            We strive to provide continuous access to the Platform, but we do not guarantee:
        </p>
        <ul>
            <li>Uninterrupted or error-free operation</li>
            <li>Availability at all times (maintenance may be required)</li>
            <li>Compatibility with all devices or browsers</li>
            <li>That defects will be corrected immediately</li>
        </ul>

        <h3>7. Limitation of Liability</h3>
        <p>
            <?php echo SITE_NAME; ?> is provided "as is" and "as available" without warranties of any kind. <?php echo COMPANY_NAME; ?> is not liable for:
        </p>
        <ul>
            <li>Any indirect, incidental, special, or consequential damages</li>
            <li>Loss of profits, data, or business opportunities</li>
            <li>Damages arising from your use or inability to use the Platform</li>
            <li>Technical failures, interruptions, or security breaches</li>
            <li>Actions of third parties</li>
        </ul>

        <h3>8. Account Suspension and Termination</h3>
        <p>
            We reserve the right to suspend or terminate your access to the Platform at any time, with or without notice, for:
        </p>
        <ul>
            <li>Violation of these Terms & Conditions</li>
            <li>Violation of Community Rules</li>
            <li>Fraudulent or abusive behavior</li>
            <li>Any reason we deem necessary to protect the Platform or other users</li>
        </ul>

        <h3>9. Indemnification</h3>
        <p>
            You agree to indemnify and hold harmless <?php echo COMPANY_NAME; ?>, its officers, directors, employees, and agents from any claims, damages, losses, or expenses arising from your use of the Platform or violation of these terms.
        </p>

        <h3>10. Governing Law and Jurisdiction</h3>
        <p>
            These Terms & Conditions are governed by the laws of India. Any disputes arising from these terms or your use of the Platform shall be subject to the exclusive jurisdiction of the courts in India.
        </p>

        <h3>11. Changes to Terms</h3>
        <p>
            We may update, modify, or revise these Terms & Conditions at any time without prior notice. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of the Platform after changes are posted constitutes your acceptance of the updated terms.
        </p>

        <h3>12. Severability</h3>
        <p>
            If any provision of these Terms & Conditions is found to be invalid or unenforceable, the remaining provisions shall continue in full force and effect.
        </p>

        <h3>13. Contact Information</h3>
        <p>
            For questions, concerns, or inquiries about these Terms & Conditions, please contact us:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
            We will respond to your inquiry within 7 business days.
        </p>

        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1rem; border-radius: 5px; margin-top: 2rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                <strong style="color: var(--secondary-color);">© <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?></strong><br>
                All Rights Reserved. This is a 100% free-to-play entertainment platform. No real money involved. Play responsibly and enjoy!
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
