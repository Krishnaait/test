<?php
require_once 'includes/config.php';
$page_title = "403 - Access Forbidden";
http_response_code(403);
include 'includes/header.php';
?>

<section class="text-center" style="padding: 4rem 2rem; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div>
        <h1 style="font-size: 6rem; color: var(--secondary-color); margin-bottom: 1rem; text-shadow: 0 0 30px rgba(255, 107, 53, 0.5);">
            403
        </h1>
        <h2 style="font-size: 2rem; color: var(--text-primary); margin-bottom: 1rem;">
            Access Forbidden
        </h2>
        <p style="font-size: 1.2rem; color: var(--text-secondary); margin-bottom: 2rem;">
            You don't have permission to access this resource.
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo SITE_URL; ?>/" class="btn btn-primary">
                🏠 Go Home
            </a>
            <a href="<?php echo SITE_URL; ?>/pages/contact.php" class="btn btn-outline">
                📧 Contact Support
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
