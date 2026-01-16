    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-grid" style="grid-template-columns: 2fr 1fr 1fr 1fr; gap: 3rem;">
                <!-- About Section -->
                <div class="footer-section">
                    <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;">
                        <span style="font-size: 2rem;">🎰</span>
                        <h3 style="color: var(--primary-color); margin: 0; font-size: 1.5rem;"><?php echo SITE_NAME; ?></h3>
                    </div>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem; line-height: 1.6;">
                        A premium online gaming platform offering free-to-play casino-style entertainment. No real money involved. Just pure digital fun and excitement.
                    </p>
                    <div style="background: rgba(255, 184, 0, 0.1); padding: 1rem; border-radius: 8px; border-left: 3px solid var(--primary-color);">
                        <p style="font-size: 0.85rem; color: var(--text-secondary); margin: 0;">
                            ⚠️ <?php echo ENTERTAINMENT_MESSAGE; ?>
                        </p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 1.1rem;">Quick Links</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">🏠 Home</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/play.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">🎮 Play Now</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/about.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">ℹ️ About Us</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/contact.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">📧 Contact</a></li>
                    </ul>
                </div>

                <!-- Games -->
                <div class="footer-section">
                    <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 1.1rem;">Our Games</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/games/mines.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">💎 Mines</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/games/dice.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">🎲 Dice</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/games/chicken.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">🐔 Chicken</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/games/plinko.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s;">🎯 Plinko</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div class="footer-section">
                    <h4 style="color: var(--primary-color); margin-bottom: 1.5rem; font-size: 1.1rem;">Legal</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/terms.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s; font-size: 0.9rem;">Terms & Conditions</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/privacy.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s; font-size: 0.9rem;">Privacy Policy</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/disclaimer.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s; font-size: 0.9rem;">Disclaimer</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/community-rules.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s; font-size: 0.9rem;">Community Rules</a></li>
                        <li style="margin-bottom: 0.75rem;"><a href="<?php echo SITE_URL; ?>/pages/responsible-gaming.php" style="color: var(--text-secondary); text-decoration: none; transition: color 0.3s; font-size: 0.9rem;">Responsible Gaming</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid rgba(255, 184, 0, 0.2); text-align: center;">
                <p style="color: var(--text-secondary); margin-bottom: 0.5rem; font-size: 0.95rem;">
                    &copy; <?php echo get_current_year(); ?> <strong style="color: var(--primary-color);"><?php echo COMPANY_NAME; ?></strong>. All Rights Reserved.
                </p>
                <p style="color: var(--text-secondary); font-size: 0.85rem; margin-bottom: 0.5rem;">
                    Last Updated: <?php echo get_last_updated(); ?>
                </p>
                <p style="font-size: 0.8rem; color: var(--text-secondary); margin-top: 1rem; opacity: 0.8;">
                    🔞 This is a free-to-play entertainment platform. No real money involved. Must be 18+.
                </p>
            </div>
        </div>
    </footer>

    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>
