<?php
require_once '../includes/config.php';
$page_title = "Community Rules";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">Community Rules</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="card">
        <p style="color: var(--text-secondary); margin-bottom: 1rem;">
            <strong>Last Updated:</strong> <?php echo get_last_updated(); ?>
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">Community Guidelines</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            <?php echo SITE_NAME; ?> is a community of entertainment gamers. To maintain a positive, safe, and fair environment for all users, we have established the following community rules. Violation of these rules may result in account suspension or permanent ban.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">1. Respect and Conduct</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            All users must treat other players, staff, and the platform with respect. Prohibited conduct includes:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Harassment, bullying, or intimidation of other users</li>
            <li>Abusive, offensive, or discriminatory language</li>
            <li>Threats or violent behavior</li>
            <li>Hate speech or discrimination based on protected characteristics</li>
            <li>Sexual harassment or inappropriate content</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">2. Fair Play</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            All users must play fairly and honestly. Prohibited activities include:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Cheating, hacking, or exploiting game bugs</li>
            <li>Using bots or automated tools</li>
            <li>Manipulating game outcomes</li>
            <li>Collusion with other players</li>
            <li>Account sharing or unauthorized access</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">3. Account Security</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Users are responsible for maintaining the security of their accounts:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Do not share your account with others</li>
            <li>Do not use another person's account</li>
            <li>Report suspicious activity immediately</li>
            <li>Use strong, unique passwords if applicable</li>
            <li>Keep your device secure</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">4. Prohibited Content</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Users must not post, share, or engage with:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Illegal content or activities</li>
            <li>Adult or explicit content</li>
            <li>Spam or unsolicited advertising</li>
            <li>Malware, viruses, or malicious code</li>
            <li>Copyrighted material without permission</li>
            <li>Personal information of others without consent</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">5. Age Compliance</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            All users must be 18 years or older. Violations include:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Users under 18 accessing the platform</li>
            <li>Allowing minors to use your account</li>
            <li>Providing false age information</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">6. Responsible Entertainment</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            While this is entertainment, we encourage responsible behavior:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Play for fun, not as a source of income</li>
            <li>Set time limits for gaming sessions</li>
            <li>Take regular breaks</li>
            <li>Do not let gaming interfere with responsibilities</li>
            <li>Seek help if you feel gaming is becoming problematic</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">7. Reporting Violations</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            If you witness a violation of these rules, please report it immediately:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
            Include details of the violation and any relevant information.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">8. Enforcement and Consequences</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Violations of community rules may result in:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Warning or notice</li>
            <li>Temporary account suspension</li>
            <li>Permanent account ban</li>
            <li>Forfeiture of virtual coins</li>
            <li>Legal action if applicable</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">9. Appeals</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            If you believe your account was suspended or banned unfairly, you may appeal by contacting us with details of your case. We will review your appeal and respond within 7 business days.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">10. Changes to Rules</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We may update these community rules at any time. Continued use of the platform constitutes acceptance of updated rules.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">11. Contact Us</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            For questions about community rules or to report violations:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
            <strong style="color: var(--primary-color);">Phone:</strong> <a href="tel:<?php echo COMPANY_PHONE; ?>" style="color: var(--primary-color);"><?php echo COMPANY_PHONE; ?></a>
        </p>

        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1rem; border-radius: 5px; margin-top: 2rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                <strong style="color: var(--secondary-color);">© <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?></strong><br>
                We are committed to maintaining a positive and fair community for all users.
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
