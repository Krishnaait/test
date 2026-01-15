<?php
require_once '../includes/config.php';
$page_title = "Disclaimer";
include '../includes/header.php';
?>

<section>
    <h1 style="text-align: center; margin-bottom: 1rem; color: var(--primary-color);">Disclaimer</h1>
    
    <div class="entertainment-message" style="margin-bottom: 2rem;">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="card">
        <p style="color: var(--text-secondary); margin-bottom: 1rem;">
            <strong>Last Updated:</strong> <?php echo get_last_updated(); ?>
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">Age & Responsible Gaming Disclaimer</h3>
        <div style="background: rgba(255, 107, 53, 0.2); border: 2px solid var(--secondary-color); padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
            <p style="color: var(--text-secondary); line-height: 1.8; font-size: 1.05rem;">
                <strong style="color: var(--secondary-color); font-size: 1.1rem;">⚠️ CRITICAL NOTICE:</strong><br><br>
                This platform is <strong>EXCLUSIVELY FOR USERS 18 YEARS AND OLDER</strong>. By accessing and using this platform, you certify that you are at least 18 years of age. If you are under 18, you must immediately exit this platform.<br><br>
                This is a <strong>100% FREE-TO-PLAY ENTERTAINMENT PLATFORM</strong>. This is NOT gambling. Virtual coins have ZERO real money value and cannot be exchanged, sold, or cashed out. All games are for entertainment purposes only.
            </p>
        </div>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">1. Entertainment-Only Nature</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            <?php echo SITE_NAME; ?> is explicitly designed as an entertainment platform. All games, features, and content are provided solely for entertainment purposes. This is not gambling, and no real money is involved in any way.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">2. Virtual Coins Have No Real Value</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Virtual coins used on this platform have absolutely NO real money value. They cannot be:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Exchanged for real money</li>
            <li>Sold to other users</li>
            <li>Cashed out or withdrawn</li>
            <li>Used outside this platform</li>
            <li>Converted to any form of currency</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">3. No Gambling</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            This platform is NOT gambling. While games may involve chance elements, they are purely for entertainment. There are no real stakes, no real winnings, and no real losses. Virtual coins cannot be converted to real money under any circumstances.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">4. Random Outcomes</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            All game outcomes are determined by random number generation. No skill-based advantage is provided for any form of payment. All players have equal chances of winning or losing in any game.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">5. No Prizes or Rewards</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Winning virtual coins does not entitle you to any real-world prizes, rewards, or compensation. Virtual coins are entertainment currency only and have no tangible value.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">6. Age Requirement - 18+ Only</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            This platform is restricted to users 18 years of age and older. By confirming your age, you certify that you meet this requirement. We reserve the right to verify age at any time and terminate access for users who do not meet the age requirement.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">7. No Professional Advice</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            Nothing on this platform constitutes professional advice, financial advice, or gambling advice. We do not provide strategies, tips, or recommendations for winning. Games are purely for entertainment.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">8. Responsible Gaming</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            While this is not gambling, we encourage responsible entertainment practices:
        </p>
        <ul style="color: var(--text-secondary); margin-left: 2rem; line-height: 1.8;">
            <li>Play for entertainment only</li>
            <li>Set time limits for your gaming sessions</li>
            <li>Take regular breaks</li>
            <li>Do not let gaming interfere with your daily responsibilities</li>
            <li>If you feel you have a problem with gaming, seek professional help</li>
        </ul>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">9. No Liability for Game Outcomes</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            <?php echo COMPANY_NAME; ?> is not liable for any outcomes of games, including losses of virtual coins. Games are provided "as is" for entertainment purposes. We are not responsible for any consequences arising from your use of the platform.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">10. Technical Issues</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            While we strive to maintain platform stability, we do not guarantee uninterrupted service. We are not liable for technical issues, bugs, or service interruptions that may affect your gaming experience.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">11. Compliance with Laws</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            This platform complies with all applicable laws and regulations. It is your responsibility to ensure that your use of this platform complies with local laws in your jurisdiction.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">12. Changes to Disclaimer</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            We may update this disclaimer at any time. Your continued use of the platform constitutes acceptance of any changes.
        </p>

        <h3 style="color: var(--primary-color); margin-top: 2rem; margin-bottom: 1rem;">13. Contact Information</h3>
        <p style="color: var(--text-secondary); line-height: 1.8;">
            For questions about this disclaimer, please contact us at:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
            <strong style="color: var(--primary-color);">Phone:</strong> <a href="tel:<?php echo COMPANY_PHONE; ?>" style="color: var(--primary-color);"><?php echo COMPANY_PHONE; ?></a>
        </p>

        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1rem; border-radius: 5px; margin-top: 2rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                <strong style="color: var(--secondary-color);">© <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?></strong><br>
                This is a free-to-play entertainment platform. No real money involved. Must be 18+.
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
