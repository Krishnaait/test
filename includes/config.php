<?php
// Apna Fantasy - Configuration File
// Version: 1.1
// Last Updated: January 16, 2026

// Site Configuration - Force HTTPS for Railway deployment
// Railway serves all apps over HTTPS, so we always use HTTPS protocol
$protocol = 'https://';

// Check if running on Railway (production) or localhost (development)
if (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    // Development environment - check for HTTPS
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
}
// For Railway and other production environments, always use HTTPS

$host = $_SERVER['HTTP_HOST'];
$site_url = $protocol . $host;

define('SITE_NAME', 'Apna Fantasy');
define('SITE_URL', $site_url);
define('SITE_DOMAIN', 'apnafantasy.com');

// Company Information
define('COMPANY_NAME', 'Apna Fantasy Entertainment Pvt. Ltd.');
define('COMPANY_EMAIL', 'support@apnafantasy.com');
// Phone removed - online platform only
define('COMPANY_CIN', 'U74999XX0000PTC000000');
define('COMPANY_GST', 'XX AAXXX0000X1Z0');

// Game Settings
define('INITIAL_COINS', 1000);
define('BONUS_COINS', 500);
define('MAX_BET', 100);
define('MIN_BET', 10);

// Age Requirement
define('MIN_AGE', 18);

// Entertainment Message
define('ENTERTAINMENT_MESSAGE', '⚠️ IMPORTANT: This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.');

// Database Configuration (if needed for future expansion)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'apnafantasy');

// Session Settings - Configure BEFORE starting session
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.cookie_samesite', 'Lax');

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set Age Verification
if (!isset($_SESSION['age_verified'])) {
    $_SESSION['age_verified'] = false;
}

// Helper Functions
function is_age_verified() {
    return isset($_SESSION['age_verified']) && $_SESSION['age_verified'] === true;
}

function get_current_year() {
    return date('Y');
}

function get_last_updated() {
    return 'January 16, 2026';
}

// Security Headers - Only if headers not sent
if (!headers_sent()) {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}
?>
