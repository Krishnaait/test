<?php
require_once 'includes/config.php';
$page_title = "404 - Page Not Found";
http_response_code(404);
include 'includes/header.php';
?>

<section class="text-center" style="padding: 4rem 2rem; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div>
        <h1 style="font-size: 6rem; color: var(--primary-color); margin-bottom: 1rem; text-shadow: 0 0 30px rgba(255, 215, 0, 0.5);">
            404
        </h1>
        <h2 style="font-size: 2rem; color: var(--text-primary); margin-bottom: 1rem;">
            Page Not Found
        </h2>
        <p style="font-size: 1.2rem; color: var(--text-secondary); margin-bottom: 2rem;">
            Oops! The page you're looking for doesn't exist or has been moved.
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo SITE_URL; ?>/" class="btn btn-primary">
                🏠 Go Home
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/play.php" class="btn btn-secondary">
                🎰 Play Games
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-outline">
                📧 Contact Us
            </a>
        </div>
        
        <div style="margin-top: 3rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                If you believe this is an error, please <a href="<?php echo SITE_URL; ?>/pages/contact.php" style="color: var(--primary-color);">contact us</a>.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
