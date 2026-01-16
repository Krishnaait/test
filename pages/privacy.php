<?php
require_once '../includes/config.php';
$page_title = "Privacy Policy";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">Privacy Policy</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="card">
        <p style="color: var(--text-secondary); margin-bottom: 1rem;">
            <strong>Last Updated:</strong> <?php echo get_last_updated(); ?>
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">1. Introduction</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            <?php echo COMPANY_NAME; ?> ("we", "us", "our") operates the <?php echo SITE_NAME; ?> platform. This Privacy Policy explains how we collect, use, disclose, and safeguard your information.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">2. Information We Collect</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Since our platform does not require registration or login, we collect minimal information:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li><strong>Age Verification:</strong> Confirmation that you are 18+ (stored in session)</li>
            <li><strong>Contact Information:</strong> Only if you voluntarily submit the contact form (name, email, message)</li>
            <li><strong>Usage Data:</strong> Browser type, IP address, pages visited (for analytics)</li>
            <li><strong>Cookies:</strong> To enhance user experience and remember preferences</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">3. How We Use Your Information</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We use collected information to:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Verify age compliance (18+ requirement)</li>
            <li>Respond to your inquiries and contact requests</li>
            <li>Improve platform performance and user experience</li>
            <li>Analyze usage patterns and trends</li>
            <li>Comply with legal obligations</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">4. Data Security</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We implement industry-standard security measures to protect your information, including:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>SSL/TLS encryption for data transmission</li>
            <li>Secure server infrastructure</li>
            <li>Regular security audits</li>
            <li>Limited data retention</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">5. Cookies and Tracking</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We use cookies to:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Remember your age verification status</li>
            <li>Store user preferences</li>
            <li>Analyze website traffic (Google Analytics)</li>
            <li>Improve user experience</li>
        </ul>
        <p style="color: var(--text-secondary); line-height: 1.8; margin-top: 1rem;">
            You can control cookies through your browser settings. Disabling cookies may affect platform functionality.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">6. Third-Party Services</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We may use third-party services for analytics and advertising:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li><strong>Google Analytics:</strong> For website traffic analysis</li>
            <li><strong>Google Ads:</strong> For advertising purposes</li>
        </ul>
        <p style="color: var(--text-secondary); line-height: 1.8; margin-top: 1rem;">
            These services have their own privacy policies. We recommend reviewing them.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">7. Data Retention</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We retain information only as long as necessary:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Age verification: Session duration only</li>
            <li>Contact form data: 30 days (or as required by law)</li>
            <li>Analytics data: 26 months</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">8. Your Rights</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            You have the right to:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Access your personal information</li>
            <li>Request correction of inaccurate data</li>
            <li>Request deletion of your data</li>
            <li>Opt-out of analytics tracking</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">9. GDPR Compliance</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We comply with the General Data Protection Regulation (GDPR). If you are in the EU, you have additional rights regarding your personal data. Contact us for more information.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">10. Children's Privacy</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Our platform is not intended for children under 18. We do not knowingly collect information from children. If we become aware of such collection, we will take immediate action to delete the information.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">11. Changes to Privacy Policy</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We may update this Privacy Policy periodically. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of the platform constitutes acceptance of the updated policy.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">12. Contact Us</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            For privacy-related questions or requests, please contact us at:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
            <strong style="color: var(--primary-color);">Address:</strong> <?php echo COMPANY_ADDRESS; ?>
        </p>

        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1rem; border-radius: 5px; margin-top: 2rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                <strong style="color: var(--secondary-color);">© <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?></strong><br>
                All Rights Reserved. Your privacy is important to us.
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
