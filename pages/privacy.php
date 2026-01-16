<?php
require_once '../includes/config.php';
$page_title = "Privacy Policy";
include '../includes/header.php';
?>

<section class="page-content">
    <h1 class="page-header">Privacy Policy</h1>
    
    <div class="page-disclaimer">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="page-card">
        <p>
            <strong>Last Updated:</strong> <?php echo get_last_updated(); ?>
        </p>

        <h3>Introduction</h3>
        <p>
            <?php echo COMPANY_NAME; ?> ("we", "us", "our") operates the <?php echo SITE_NAME; ?> platform. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website.
        </p>

        <h3>1. Information We Collect</h3>
        <p>
            Since our platform does not require registration or login, we collect minimal information:
        </p>
        <ul>
            <li><strong>Age Verification:</strong> Confirmation that you are 18+ (stored in browser session only)</li>
            <li><strong>Contact Information:</strong> Only if you voluntarily submit the contact form (name, email, message)</li>
            <li><strong>Usage Data:</strong> Browser type, IP address, pages visited (for analytics purposes)</li>
            <li><strong>Cookies:</strong> To enhance user experience and remember preferences</li>
        </ul>

        <h3>2. How We Use Your Information</h3>
        <p>
            We use the collected information to:
        </p>
        <ul>
            <li>Verify age compliance (18+ requirement for entertainment games)</li>
            <li>Respond to your inquiries and contact requests</li>
            <li>Improve platform performance and user experience</li>
            <li>Analyze usage patterns and trends</li>
            <li>Comply with legal obligations</li>
        </ul>

        <h3>3. Data Security</h3>
        <p>
            We implement industry-standard security measures to protect your information, including:
        </p>
        <ul>
            <li>SSL/TLS encryption for data transmission</li>
            <li>Secure server infrastructure</li>
            <li>Regular security audits and updates</li>
            <li>Limited data retention policies</li>
            <li>Access controls and authentication</li>
        </ul>

        <h3>4. Cookies and Tracking Technologies</h3>
        <p>
            We use cookies and similar tracking technologies to:
        </p>
        <ul>
            <li>Remember your age verification status</li>
            <li>Store user preferences and settings</li>
            <li>Analyze website traffic and user behavior</li>
            <li>Improve overall user experience</li>
        </ul>
        <p>
            You can control cookies through your browser settings. However, disabling cookies may affect certain platform functionality.
        </p>

        <h3>5. Third-Party Services</h3>
        <p>
            We may use third-party services for analytics and platform improvement:
        </p>
        <ul>
            <li><strong>Google Analytics:</strong> For website traffic analysis and user behavior insights</li>
            <li><strong>Hosting Services:</strong> For secure and reliable platform hosting</li>
        </ul>
        <p>
            These third-party services have their own privacy policies. We recommend reviewing them to understand how they handle your data.
        </p>

        <h3>6. Data Retention</h3>
        <p>
            We retain information only as long as necessary for the purposes outlined in this policy:
        </p>
        <ul>
            <li><strong>Age Verification:</strong> Session duration only (cleared when you close browser)</li>
            <li><strong>Contact Form Data:</strong> 30 days or as required by law</li>
            <li><strong>Analytics Data:</strong> Up to 26 months for trend analysis</li>
        </ul>

        <h3>7. Your Privacy Rights</h3>
        <p>
            You have the right to:
        </p>
        <ul>
            <li>Access your personal information we hold</li>
            <li>Request correction of inaccurate data</li>
            <li>Request deletion of your data (subject to legal requirements)</li>
            <li>Opt-out of analytics tracking</li>
            <li>Withdraw consent for data processing</li>
        </ul>

        <h3>8. GDPR Compliance</h3>
        <p>
            We comply with the General Data Protection Regulation (GDPR) for users in the European Union. If you are in the EU, you have additional rights regarding your personal data, including the right to data portability and the right to lodge a complaint with a supervisory authority.
        </p>

        <h3>9. Children's Privacy</h3>
        <p>
            Our platform is strictly intended for users 18 years and older. We do not knowingly collect personal information from anyone under 18. If we become aware that we have collected information from a child under 18, we will take immediate steps to delete that information.
        </p>

        <h3>10. International Data Transfers</h3>
        <p>
            Your information may be transferred to and maintained on servers located outside of your country. By using our platform, you consent to the transfer of information to countries that may have different data protection laws than your country of residence.
        </p>

        <h3>11. Changes to Privacy Policy</h3>
        <p>
            We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. Changes will be posted on this page with an updated "Last Updated" date. Your continued use of the platform after changes are posted constitutes your acceptance of the updated policy.
        </p>

        <h3>12. Contact Us</h3>
        <p>
            For privacy-related questions, requests, or concerns, please contact us:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
            We will respond to your inquiry within 7 business days.
        </p>

        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1rem; border-radius: 5px; margin-top: 2rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                <strong style="color: var(--secondary-color);">© <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?></strong><br>
                Your privacy is important to us. We are committed to protecting your personal information and being transparent about our data practices.
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
