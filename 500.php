<?php
require_once 'includes/config.php';
$page_title = "500 - Server Error";
http_response_code(500);
include 'includes/header.php';
?>

<section class="text-center" style="padding: 4rem 2rem; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div>
        <h1 style="font-size: 6rem; color: var(--danger-color); margin-bottom: 1rem; text-shadow: 0 0 30px rgba(220, 53, 69, 0.5);">
            500
        </h1>
        <h2 style="font-size: 2rem; color: var(--text-primary); margin-bottom: 1rem;">
            Internal Server Error
        </h2>
        <p style="font-size: 1.2rem; color: var(--text-secondary); margin-bottom: 2rem;">
            Something went wrong on our end. We're working to fix it!
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo SITE_URL; ?>/" class="btn btn-primary">
                🏠 Go Home
            </a>
            <a href="javascript:location.reload()" class="btn btn-secondary">
                🔄 Reload Page
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-outline">
                📧 Report Issue
            </a>
        </div>
        
        <div style="margin-top: 3rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                If the problem persists, please <a href="<?php echo SITE_URL; ?>/pages/contact.php" style="color: var(--primary-color);">contact our support team</a>.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
