    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h4>🎰 <?php echo SITE_NAME; ?></h4>
                    <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                        100% Free-to-Play Entertainment Platform
                    </p>
                    <p style="font-size: 0.85rem; color: var(--text-secondary);">
                        <?php echo ENTERTAINMENT_MESSAGE; ?>
                    </p>
                </div>

                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/">Home</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/play.php">Play Now</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/about.php">About Us</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="<?php echo SITE_URL; ?>/pages/terms.php">Terms & Conditions</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/privacy.php">Privacy Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/disclaimer.php">Disclaimer</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/community-rules.php">Community Rules</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/responsible-gaming.php">Responsible Gaming</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?>. All Rights Reserved.</p>
                <p>Last Updated: <?php echo get_last_updated(); ?></p>
                <p style="font-size: 0.8rem; margin-top: 1rem;">
                    This is a free-to-play entertainment platform. No real money involved. Must be 18+.
                </p>
            </div>
        </div>
    </footer>

    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>
