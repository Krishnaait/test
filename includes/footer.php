    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Company Info Section -->
                <div class="footer-section footer-about">
                    <div class="footer-logo">
                        <img src="<?php echo SITE_URL; ?>/assets/images/logo.webp" alt="<?php echo SITE_NAME; ?>" class="footer-logo-image">
                        <h3><?php echo SITE_NAME; ?></h3>
                    </div>
                    <p class="footer-description">
                        A premium online gaming platform offering free-to-play casino-style entertainment. No real money involved. Just pure digital fun and excitement.
                    </p>
                    <div class="footer-company-details">
                        <p><strong>CIN:</strong> <?php echo COMPANY_CIN; ?></p>
                        <p><strong>PAN:</strong> <?php echo COMPANY_PAN; ?></p>
                        <p><strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?></p>
                        <p><strong>Email:</strong> <?php echo COMPANY_EMAIL; ?></p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/">Home</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/about.php">About Us</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/play.php">Play Now</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/contact.php">Contact</a></li>
                    </ul>
                </div>

                <!-- Our Games -->
                <div class="footer-section">
                    <h4>Our Games</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/games/mines.php">🎯 Mines</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/games/dice.php">🎲 Dice</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/games/chicken.php">🐔 Chicken</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/games/plinko.php">⭕ Plinko</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/pages/terms.php">Terms & Conditions</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/privacy.php">Privacy Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/fair-policy.php">Fair Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/disclaimer.php">Disclaimer</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/community-rules.php">Community Rules</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pages/responsible-gaming.php">Responsible Gaming</a></li>
                    </ul>
                </div>
            </div>

            <!-- Disclaimer Bar -->
            <div class="footer-disclaimer">
                <p>⚠️ <strong>Disclaimer:</strong> This is a free-to-play gaming platform for entertainment purposes only. No real money is involved. No prizes or winnings are given to players. Players must be 18 years or older.</p>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?>. All Rights Reserved. | Play for Fun | No Real Money | Pure Entertainment</p>
                <p class="footer-updated">Last Updated: <?php echo get_last_updated(); ?></p>
            </div>
        </div>
    </footer>

    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>
