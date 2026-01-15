# Apna Fantasy - Deployment Guide for apnafantasy.com

**Version:** 1.0  
**Date:** January 16, 2026  
**GitHub:** https://github.com/Krishnaait/NEW-Website

---

## 🚀 Quick Deployment Steps

### 1. Clone from GitHub

```bash
git clone https://github.com/Krishnaait/NEW-Website.git apnafantasy
cd apnafantasy
```

### 2. Update Configuration

Edit `includes/config.php`:

```php
// Change SITE_URL to your domain
define('SITE_URL', 'https://apnafantasy.com');

// Update company information
define('COMPANY_NAME', 'Apna Fantasy Entertainment Pvt. Ltd.');
define('COMPANY_EMAIL', 'support@apnafantasy.com');
define('COMPANY_PHONE', '+91-XXXXXXXXXX');
define('COMPANY_ADDRESS', 'Your Complete Address');
define('COMPANY_CIN', 'Your CIN Number');
define('COMPANY_GST', 'Your GST Number');
```

### 3. Upload to Web Hosting

**Via FTP/SFTP:**
- Connect to your hosting
- Upload all files to `public_html` or `www` directory
- Ensure file permissions: 755 for directories, 644 for files

**Via Git (Recommended):**
```bash
# On your server
cd /path/to/public_html
git clone https://github.com/Krishnaait/NEW-Website.git .
```

### 4. Set Up SSL Certificate

- Install SSL certificate (Let's Encrypt is free)
- Enable HTTPS in hosting control panel
- Force HTTPS redirect

### 5. Configure Domain

- Point domain `apnafantasy.com` to your hosting
- Update DNS records
- Wait for propagation (24-48 hours)

### 6. Test Website

- Visit `https://apnafantasy.com`
- Test age verification
- Test all 4 games
- Verify all pages load correctly

---

## 📁 File Structure

```
apnafantasy/
├── index.php                 # Homepage
├── includes/
│   ├── config.php           # ⚠️ MUST UPDATE
│   ├── header.php
│   ├── footer.php
│   └── verify-age.php
├── pages/
│   ├── play.php
│   ├── about.php
│   ├── contact.php
│   ├── how-it-works.php
│   ├── terms.php
│   ├── privacy.php
│   ├── disclaimer.php
│   ├── community-rules.php
│   └── responsible-gaming.php
├── games/
│   ├── mines.php
│   ├── dice.php
│   ├── chicken.php
│   └── plinko.php
├── assets/
│   ├── css/style.css
│   ├── js/main.js
│   └── images/
└── README.md
```

---

## ⚙️ Server Requirements

### Minimum Requirements

- **PHP:** 7.4 or higher
- **Web Server:** Apache or Nginx
- **SSL Certificate:** Required for HTTPS
- **Storage:** 50 MB minimum
- **Bandwidth:** Depends on traffic

### Recommended Hosting Providers

1. **Bluehost** - Good for beginners
2. **SiteGround** - Fast and reliable
3. **HostGator** - Budget-friendly
4. **Namecheap** - Affordable with good support
5. **DigitalOcean** - For advanced users

---

## 🔧 Configuration Details

### Site Configuration

```php
// Site Settings
define('SITE_NAME', 'Apna Fantasy');
define('SITE_URL', 'https://apnafantasy.com');  // ⚠️ UPDATE THIS
define('SITE_DOMAIN', 'apnafantasy.com');
```

### Game Settings

```php
// Initial coins for new sessions
define('INITIAL_COINS', 1000);

// Bonus coins (if needed)
define('BONUS_COINS', 500);

// Betting limits
define('MAX_BET', 100);
define('MIN_BET', 10);
```

### Age Restriction

```php
// Minimum age requirement
define('MIN_AGE', 18);
```

---

## 🎨 Customization

### Change Colors

Edit `assets/css/style.css`:

```css
:root {
    --primary-color: #FFD700;      /* Gold */
    --secondary-color: #FF6B35;    /* Orange */
    --dark-bg: #0F0F1E;           /* Dark background */
    --card-bg: #1A1A2E;           /* Card background */
}
```

### Update Logo

Replace the emoji logo in `includes/header.php`:

```php
<span class="logo-icon">🎰</span>  <!-- Change this -->
```

Or add an image:

```php
<img src="<?php echo SITE_URL; ?>/assets/images/logo.png" alt="Logo">
```

---

## 📧 Email Configuration

### Contact Form

The contact form in `pages/contact.php` uses PHP's `mail()` function.

**To make it work:**

1. Ensure your hosting supports PHP `mail()` function
2. Or configure SMTP settings
3. Or use a third-party email service (SendGrid, Mailgun)

**Example SMTP Configuration:**

```php
// In includes/config.php
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your-email@gmail.com');
define('SMTP_PASS', 'your-app-password');
```

---

## 🔒 Security Best Practices

### 1. Enable HTTPS

```apache
# In .htaccess
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### 2. Set Proper File Permissions

```bash
# Directories
find . -type d -exec chmod 755 {} \;

# Files
find . -type f -exec chmod 644 {} \;
```

### 3. Hide PHP Version

```php
# In php.ini
expose_php = Off
```

### 4. Disable Directory Listing

```apache
# In .htaccess
Options -Indexes
```

### 5. Regular Backups

- Backup files weekly
- Store backups off-site
- Test restore process

---

## 📊 Performance Optimization

### 1. Enable Gzip Compression

```apache
# In .htaccess
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
</IfModule>
```

### 2. Browser Caching

```apache
# In .htaccess
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

### 3. Optimize Images

- Use WebP format
- Compress images before upload
- Use appropriate dimensions

---

## 🐛 Troubleshooting

### Issue: White Screen / Blank Page

**Solution:**
```php
// Temporarily enable error display
ini_set('display_errors', 1);
error_reporting(E_ALL);
```

Check server error logs for details.

### Issue: CSS Not Loading

**Solution:**
- Verify `SITE_URL` in `config.php`
- Check file permissions
- Clear browser cache
- Check .htaccess rules

### Issue: Games Not Working

**Solution:**
- Check browser console for JavaScript errors
- Verify all game files are uploaded
- Check file permissions
- Test in different browsers

### Issue: Age Gate Not Appearing

**Solution:**
- Clear browser cookies
- Check JavaScript is enabled
- Verify `verify-age.php` exists
- Check session settings

---

## 📈 Analytics Setup

### Google Analytics

Add to `includes/header.php` before `</head>`:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

---

## 🎯 Google Ads Setup

### Requirements Met ✅

- ✅ No real money transactions
- ✅ Clear entertainment-only messaging
- ✅ Age restriction (18+) enforced
- ✅ No payment processing
- ✅ Fair game outcomes
- ✅ Complete legal documentation

### Ad Placement Recommendations

1. **Top of homepage** - Banner ad
2. **Between game cards** - Native ads
3. **Sidebar** - Display ads
4. **Footer area** - Text ads

**Important:** Ensure ads comply with Google's gambling policies.

---

## 📱 Mobile Optimization

The website is already responsive, but verify:

- [ ] Test on iPhone
- [ ] Test on Android
- [ ] Test on tablets
- [ ] Check touch interactions
- [ ] Verify font sizes
- [ ] Test game controls

---

## 🔄 Updates & Maintenance

### Pull Latest Updates from GitHub

```bash
cd /path/to/apnafantasy
git pull origin main
```

### Backup Before Updates

```bash
# Backup current files
tar -czf backup-$(date +%Y%m%d).tar.gz .

# Or copy to backup directory
cp -r . ../backup-$(date +%Y%m%d)
```

### Regular Maintenance Tasks

**Daily:**
- Monitor error logs
- Check website uptime

**Weekly:**
- Test all games
- Review analytics
- Check for broken links

**Monthly:**
- Update PHP if needed
- Review security
- Backup website

**Quarterly:**
- Security audit
- Performance review
- Update legal pages if needed

---

## 📞 Support & Help

### Documentation

- **README.md** - Project overview
- **INSTALLATION_GUIDE.md** - Setup instructions
- **DEPLOYMENT_GUIDE.md** - This file

### Common Issues

Most issues are related to:
1. Incorrect `SITE_URL` configuration
2. Missing files or wrong permissions
3. PHP version compatibility
4. SSL/HTTPS setup

### Getting Help

- Check documentation first
- Review server error logs
- Test in different browsers
- Contact hosting support

---

## ✅ Pre-Launch Checklist

Before going live, verify:

- [ ] Domain is pointing correctly
- [ ] SSL/HTTPS is working
- [ ] `config.php` is updated with correct info
- [ ] All pages load without errors
- [ ] Age gate appears on first visit
- [ ] All 4 games are playable
- [ ] Contact form works
- [ ] All legal pages are accessible
- [ ] Entertainment message displays everywhere
- [ ] Mobile responsive design works
- [ ] Navigation links work correctly
- [ ] Footer displays company info
- [ ] No console errors in browser
- [ ] Page load time is acceptable
- [ ] Analytics is set up (optional)
- [ ] Backup system is in place

---

## 🎉 Launch!

Once everything is verified:

1. ✅ Remove any test content
2. ✅ Clear all caches
3. ✅ Test one final time
4. ✅ Announce launch
5. ✅ Monitor for issues

---

## 📊 Post-Launch

### Week 1
- Monitor closely for issues
- Check analytics daily
- Gather user feedback
- Fix any bugs immediately

### Month 1
- Review analytics
- Optimize based on data
- Plan improvements
- Consider adding features

### Ongoing
- Regular updates
- Security patches
- Performance optimization
- Content updates

---

## 🔗 Important Links

- **GitHub Repository:** https://github.com/Krishnaait/NEW-Website
- **Live Website:** https://apnafantasy.com (after deployment)
- **Support Email:** support@apnafantasy.com

---

## 📝 Notes

### Entertainment-Only Platform

This is a **100% free-to-play entertainment platform**:
- No real money transactions
- Virtual coins have NO real value
- Cannot be cashed out
- For entertainment purposes only
- 18+ age restriction

### Legal Compliance

All legal pages are included:
- Terms & Conditions
- Privacy Policy
- Disclaimer
- Community Rules
- Responsible Gaming

### Google Ads Compliance

The website is designed to comply with Google Ads policies:
- No gambling
- No real money
- Clear messaging
- Age restriction
- Complete documentation

---

**Version:** 1.0  
**Last Updated:** January 16, 2026  
**Status:** Ready for Production Deployment

---

**Good luck with your launch! 🚀**
