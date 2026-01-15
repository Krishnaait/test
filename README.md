# Apna Fantasy - Social Casino Website

**Version:** 1.0  
**Last Updated:** January 16, 2026  
**Status:** Production Ready  
**Compliance:** Google Ads Certified

---

## 📋 Project Overview

Apna Fantasy is a **100% free-to-play entertainment gaming platform** built with PHP, HTML, and CSS. It features four exciting casino-style games with a modern, professional design. The platform is fully compliant with Google Ads policies and includes comprehensive legal documentation.

### Key Features

- **100% Free-to-Play:** No real money, no gambling, entertainment only
- **4 Exciting Games:** Mines, Dice, Chicken, and Plinko
- **Age Verification:** 18+ only with strict enforcement
- **Responsive Design:** Works on desktop, tablet, and mobile
- **Modern Casino Aesthetic:** Professional dark theme with gold accents
- **Complete Legal Documentation:** All required pages included
- **Google Ads Compliant:** Meets all advertising policy requirements
- **No Authentication:** No login or registration required

---

## 🎮 Games Included

### 1. **Mines** 💣
- Strategic game where players avoid mines and reveal safe tiles
- Multiple difficulty levels
- Real-time gameplay with instant results
- Full-screen mode available

### 2. **Dice** 🎲
- Classic dice prediction game
- Multiple betting options
- Instant results
- Full-screen mode available

### 3. **Chicken** 🐔
- Interactive chicken guiding game
- Progressive difficulty levels
- Reward collection mechanics
- Full-screen mode available

### 4. **Plinko** ⭕
- Physics-based ball dropping game
- Multiple prize zones
- Classic arcade-style gameplay
- Full-screen mode available

---

## 📁 Project Structure

```
apnafantasy/
├── index.php                          # Homepage
├── includes/
│   ├── config.php                     # Configuration & settings
│   ├── header.php                     # Header component
│   ├── footer.php                     # Footer component
│   └── verify-age.php                 # Age verification handler
├── pages/
│   ├── play.php                       # Game selection page
│   ├── about.php                      # About Us page
│   ├── contact.php                    # Contact page
│   ├── how-it-works.php               # How It Works page
│   ├── terms.php                      # Terms & Conditions
│   ├── privacy.php                    # Privacy Policy
│   ├── disclaimer.php                 # Disclaimer
│   ├── community-rules.php            # Community Rules
│   └── responsible-gaming.php         # Responsible Gaming
├── games/
│   ├── mines.php                      # Mines game
│   ├── dice.php                       # Dice game
│   ├── chicken.php                    # Chicken game
│   └── plinko.php                     # Plinko game
├── assets/
│   ├── css/
│   │   └── style.css                  # Global stylesheet
│   ├── js/
│   │   └── main.js                    # Main JavaScript
│   └── images/                        # Image assets
└── README.md                          # This file
```

---

## 🚀 Getting Started

### Requirements

- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Modern web browser

### Installation

1. **Clone or download the project:**
   ```bash
   cd /path/to/apnafantasy
   ```

2. **Start the PHP development server:**
   ```bash
   php -S localhost:8000
   ```

3. **Open in browser:**
   ```
   http://localhost:8000
   ```

### Production Deployment

1. **Update configuration** in `includes/config.php`:
   - Change `SITE_URL` to your domain
   - Update company information
   - Configure database if needed

2. **Upload to web server:**
   - Upload all files to your web hosting
   - Ensure proper file permissions (755 for directories, 644 for files)

3. **Set up SSL/TLS:**
   - Install SSL certificate for HTTPS
   - Update `SITE_URL` to use HTTPS

4. **Configure web server:**
   - Point domain to the project root
   - Ensure `.php` files are processed by PHP

---

## 📄 Pages & Features

### Public Pages

| Page | URL | Purpose |
|------|-----|---------|
| Home | `/` | Homepage with hero section and game showcase |
| Play Now | `/pages/play.php` | Game selection and descriptions |
| About Us | `/pages/about.php` | Company information and credibility |
| Contact | `/pages/contact.php` | Contact form and support information |
| How It Works | `/pages/how-it-works.php` | Platform mechanics and features |

### Legal Pages

| Page | URL | Purpose |
|------|-----|---------|
| Terms & Conditions | `/pages/terms.php` | Legal agreement with users |
| Privacy Policy | `/pages/privacy.php` | Data protection statement |
| Disclaimer | `/pages/disclaimer.php` | Entertainment-only nature & age gate |
| Community Rules | `/pages/community-rules.php` | Fair play guidelines |
| Responsible Gaming | `/pages/responsible-gaming.php` | Support resources & tips |

---

## 🎯 Compliance & Legal

### Google Ads Compliance

✅ **All requirements met:**
- No real money transactions
- Clear entertainment-only messaging
- Age restriction (18+) enforced
- No payment processing
- Fair game outcomes
- Complete legal documentation

### Entertainment-Only Messaging

The following message appears on all pages:

> **⚠️ IMPORTANT:** This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.

### Age Verification

- Modal appears on first visit
- User must confirm 18+ status
- Verification stored in session
- Re-verified on each session

---

## 🔧 Configuration

Edit `includes/config.php` to customize:

```php
// Site Configuration
define('SITE_NAME', 'Apna Fantasy');
define('SITE_URL', 'https://apnafantasy.com');
define('SITE_DOMAIN', 'apnafantasy.com');

// Company Information
define('COMPANY_NAME', 'Apna Fantasy Entertainment Pvt. Ltd.');
define('COMPANY_EMAIL', 'support@apnafantasy.com');
define('COMPANY_PHONE', '+91-XXXXXXXXXX');

// Game Settings
define('INITIAL_COINS', 1000);
define('BONUS_COINS', 500);
define('MAX_BET', 100);
define('MIN_BET', 10);
```

---

## 🎨 Design System

### Color Scheme

- **Primary:** `#FFD700` (Gold)
- **Secondary:** `#FF6B35` (Orange)
- **Dark Background:** `#0F0F1E`
- **Card Background:** `#1A1A2E`
- **Text Primary:** `#FFFFFF`
- **Text Secondary:** `#B0B0B0`

### Typography

- **Font Family:** Segoe UI, Tahoma, Geneva, Verdana, sans-serif
- **Headings:** Bold, larger sizes with gold color
- **Body:** Regular weight, secondary color

### Responsive Breakpoints

- **Desktop:** > 1024px
- **Tablet:** 768px - 1024px
- **Mobile:** < 768px

---

## 📱 Browser Support

- Chrome/Chromium (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

---

## 🔒 Security Features

- **HTTPS/SSL:** Recommended for production
- **Security Headers:** X-Frame-Options, X-XSS-Protection, etc.
- **Session Security:** HTTPOnly, Secure, SameSite cookies
- **Input Validation:** All user inputs validated
- **No Payment Processing:** Eliminates payment security risks

---

## 📊 Virtual Coins System

- **Initial Coins:** 1,000
- **Bonus Coins:** 500
- **Min Bet:** 10 coins
- **Max Bet:** 100 coins
- **Real Value:** ZERO - Cannot be cashed out

---

## 🎵 Audio & Effects

All games include:
- Background music
- Sound effects for wins/losses
- Mute button for audio control
- Audio preferences saved in browser

---

## 📞 Support & Contact

**Email:** support@apnafantasy.com  
**Phone:** +91-XXXXXXXXXX  
**Address:** Your Company Address

---

## 📋 Customization Guide

### Adding New Games

1. Create game file in `/games/` directory
2. Follow existing game structure
3. Include full-screen option
4. Add game to play.php
5. Update navigation if needed

### Modifying Colors

Edit CSS variables in `assets/css/style.css`:

```css
:root {
    --primary-color: #FFD700;
    --secondary-color: #FF6B35;
    --dark-bg: #0F0F1E;
    /* ... more variables */
}
```

### Updating Company Info

Edit `includes/config.php`:

```php
define('COMPANY_NAME', 'Your Company Name');
define('COMPANY_EMAIL', 'your@email.com');
define('COMPANY_PHONE', 'Your Phone');
```

---

## 🐛 Troubleshooting

### Age Gate Not Working

- Clear browser cookies
- Check session settings in config.php
- Verify JavaScript is enabled

### Games Not Loading

- Check file paths in game files
- Verify PHP is processing .php files
- Check browser console for errors

### CSS Not Loading

- Verify SITE_URL in config.php
- Check file permissions
- Clear browser cache

### Contact Form Not Working

- Check email configuration
- Verify form method is POST
- Check server error logs

---

## 📈 Performance Optimization

- **CSS:** Minified and optimized
- **JavaScript:** Lazy loading for images
- **Images:** Use WebP format where possible
- **Caching:** Browser caching enabled
- **Load Time:** Target < 2 seconds

---

## 🔄 Updates & Maintenance

### Regular Tasks

- Monitor error logs
- Update security headers
- Review analytics
- Test all games
- Check legal compliance

### Version History

| Version | Date | Changes |
|---------|------|---------|
| 1.0 | Jan 16, 2026 | Initial release |

---

## 📄 License

© 2026 Apna Fantasy Entertainment Pvt. Ltd. All Rights Reserved.

This is a free-to-play entertainment platform. No real money involved.

---

## 🙏 Acknowledgments

Built with:
- PHP 8.1
- HTML5
- CSS3
- JavaScript (Vanilla)

---

## 📞 Need Help?

For questions or support, contact: support@apnafantasy.com

---

**Last Updated:** January 16, 2026  
**Status:** Production Ready  
**Version:** 1.0

Railway deployment trigger
