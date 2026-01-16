<?php
require_once '../includes/config.php';
$page_title = "Contact Us";
include '../includes/header.php';

// Handle form submission
$form_submitted = false;
$form_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Here you would typically send an email
        // For now, we'll just display a success message
        $form_submitted = true;
        $form_message = 'Thank you for your message! We will get back to you soon.';
    } else {
        $form_message = 'Please fill in all fields.';
    }
}
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">Contact Us</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="grid grid-2">
        <!-- Contact Information -->
        <div>
            <div class="card">
                <h2 style="color: var(--primary-color); margin-bottom: 2rem;">Get In Touch</h2>
                
                <div style="margin-bottom: 2rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">🌐 Website</h4>
                    <a href="<?php echo SITE_URL; ?>" style="color: var(--primary-color); text-decoration: none; font-size: 1.1rem;">
                        <?php echo SITE_DOMAIN; ?>
                    </a>
                </div>

                <div style="background: rgba(255, 215, 0, 0.1); padding: 1.5rem; border-radius: 8px;">
                    <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">⏰ Response Time</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">
                        We typically respond to inquiries within 24-48 hours during business days.
                    </p>
                </div>

                <div style="background: rgba(255, 184, 0, 0.1); padding: 1.5rem; border-radius: 8px; margin-top: 1.5rem; border: 2px dashed var(--primary-color);">
                    <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">💬 Contact Method</h4>
                    <p style="color: var(--text-secondary); font-size: 0.9rem;">
                        Please use the contact form to send us your inquiries. We'll respond to your email address provided in the form.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div>
            <div class="card">
                <h2 style="color: var(--primary-color); margin-bottom: 1.5rem;">Send us a Message</h2>
                
                <?php if ($form_submitted): ?>
                <div style="background: rgba(76, 175, 80, 0.2); border: 1px solid #4CAF50; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; color: #4CAF50;">
                    ✓ <?php echo $form_message; ?>
                </div>
                <?php elseif (!empty($form_message)): ?>
                <div style="background: rgba(244, 67, 54, 0.2); border: 1px solid #f44336; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; color: #f44336;">
                    ✗ <?php echo $form_message; ?>
                </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="card" style="margin-top: 2rem;">
        <h2 style="color: var(--primary-color); margin-bottom: 2rem;">Frequently Asked Questions</h2>
        
        <div style="margin-bottom: 1.5rem;">
            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Q: Is this platform safe to use?</h4>
            <p style="color: var(--text-secondary);">A: Yes, absolutely! We prioritize user safety and security with industry-standard encryption and data protection measures.</p>
        </div>

        <div style="margin-bottom: 1.5rem;">
            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Q: Do I need to provide personal information?</h4>
            <p style="color: var(--text-secondary);">A: No, you can play our games without registration or login. We only collect information when you choose to contact us.</p>
        </div>

        <div style="margin-bottom: 1.5rem;">
            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Q: Can I win real money?</h4>
            <p style="color: var(--text-secondary);">A: No. This is a 100% free-to-play entertainment platform. Virtual coins have no real money value and cannot be cashed out.</p>
        </div>

        <div style="margin-bottom: 1.5rem;">
            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Q: What age do I need to be to play?</h4>
            <p style="color: var(--text-secondary);">A: You must be 18 years or older to access our platform. Age verification is required before playing.</p>
        </div>

        <div>
            <h4 style="color: var(--primary-color); margin-bottom: 0.5rem;">Q: Are the games fair?</h4>
            <p style="color: var(--text-secondary);">A: Yes, all our games use fair random outcomes. There is no skill-based advantage for payment.</p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
