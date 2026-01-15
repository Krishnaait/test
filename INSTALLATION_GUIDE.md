# Apna Fantasy - Installation & Setup Guide

**Version:** 1.0  
**Date:** January 16, 2026

---

## 📦 What You're Getting

A complete, production-ready PHP-based social casino website with:

- ✅ Modern responsive design (desktop, tablet, mobile)
- ✅ 4 fully functional games (Mines, Dice, Chicken, Plinko)
- ✅ Age verification system (18+ gate)
- ✅ Complete legal pages (Terms, Privacy, Disclaimer, etc.)
- ✅ Entertainment-only messaging throughout
- ✅ Google Ads compliant
- ✅ No real money transactions
- ✅ No login/registration required

---

## 🚀 Quick Start (Local Testing)

### Step 1: Extract Files

```bash
tar -xzf apnafantasy-website.tar.gz
cd apnafantasy
```

### Step 2: Start PHP Server

```bash
php -S localhost:8000
```

### Step 3: Open in Browser

```
http://localhost:8000
```

**That's it!** The website is now running locally.

---

## 🌐 Production Deployment

### Step 1: Choose Hosting

You need a web hosting provider that supports:
- PHP 7.4 or higher
- Apache or Nginx web server
- FTP/SFTP access or file manager

**Recommended Hosts:**
- Bluehost
- HostGator
- SiteGround
- GoDaddy
- Namecheap

### Step 2: Upload Files

1. **Via FTP:**
   - Connect using FTP client (FileZilla, WinSCP, etc.)
   - Upload all files to `public_html` or `www` directory
   - Ensure directory structure is preserved

2. **Via File Manager:**
   - Use hosting control panel (cPanel, Plesk, etc.)
   - Upload `apnafantasy-website.tar.gz`
   - Extract in `public_html` directory

3. **Via Git:**
   ```bash
   git clone <your-repo-url> /path/to/public_html
   ```

### Step 3: Configure Domain

1. **Point domain to hosting:**
   - Update DNS records at domain registrar
   - Point to hosting provider's nameservers
   - Wait 24-48 hours for propagation

2. **Set up SSL/TLS:**
   - Use Let's Encrypt (free) or purchase certificate
   - Enable HTTPS in hosting control panel
   - Force HTTPS redirect

### Step 4: Update Configuration

Edit `includes/config.php`:

```php
// Change from:
define('SITE_URL', 'http://localhost:8000');

// To your domain:
define('SITE_URL', 'https://apnafantasy.com');

// Update company info:
define('COMPANY_NAME', 'Your Company Name');
define('COMPANY_EMAIL', 'your@email.com');
define('COMPANY_PHONE', 'Your Phone Number');
define('COMPANY_ADDRESS', 'Your Address');
```

### Step 5: Set File Permissions

```bash
# Via SSH:
chmod -R 755 /path/to/apnafantasy
chmod -R 644 /path/to/apnafantasy/assets
```

### Step 6: Test Website

1. Visit `https://apnafantasy.com`
2. Verify age gate appears
3. Click "I Confirm (18+)"
4. Test all pages and games
5. Check legal pages load correctly

---

## 🔧 Configuration Options

### Basic Settings

Edit `includes/config.php`:

```php
// Site name and domain
define('SITE_NAME', 'Apna Fantasy');
define('SITE_DOMAIN', 'apnafantasy.com');

// Company details
define('COMPANY_NAME', 'Your Company Name');
define('COMPANY_EMAIL', 'support@yoursite.com');
define('COMPANY_PHONE', '+1-XXX-XXX-XXXX');
define('COMPANY_ADDRESS', '123 Main St, City, Country');

// Game settings
define('INITIAL_COINS', 1000);      // Starting coins
define('BONUS_COINS', 500);         // Bonus coins
define('MAX_BET', 100);             // Maximum bet
define('MIN_BET', 10);              // Minimum bet
```

### Color Customization

Edit `assets/css/style.css`:

```css
:root {
    --primary-color: #FFD700;       /* Gold */
    --secondary-color: #FF6B35;     /* Orange */
    --dark-bg: #0F0F1E;             /* Dark background */
    --card-bg: #1A1A2E;             /* Card background */
    --text-primary: #FFFFFF;        /* White text */
    --text-secondary: #B0B0B0;      /* Gray text */
}
```

---

## 📋 Pre-Launch Checklist

Before going live, verify:

- [ ] Domain is pointing correctly
- [ ] SSL/HTTPS is working
- [ ] All pages load without errors
- [ ] Age gate appears on first visit
- [ ] All 4 games are playable
- [ ] Contact form works
- [ ] All legal pages are accessible
- [ ] Entertainment message displays on all pages
- [ ] Mobile responsive design works
- [ ] Navigation links work correctly
- [ ] Footer displays company info
- [ ] No console errors in browser
- [ ] Page load time is acceptable (< 2 seconds)

---

## 🎮 Game Integration

All games are pre-integrated and ready to use:

### Mines Game
- **File:** `games/mines.php`
- **How to Play:** Reveal safe tiles, avoid mines
- **Features:** Multiple difficulty levels, full-screen mode

### Dice Game
- **File:** `games/dice.php`
- **How to Play:** Predict dice outcome
- **Features:** Multiple betting options, instant results

### Chicken Game
- **File:** `games/chicken.php`
- **How to Play:** Guide chicken to victory
- **Features:** Progressive difficulty, reward collection

### Plinko Game
- **File:** `games/plinko.php`
- **How to Play:** Drop ball through pegs
- **Features:** Physics-based, multiple prize zones

---

## 🔒 Security Recommendations

1. **Enable HTTPS:**
   - Use SSL certificate (Let's Encrypt is free)
   - Force HTTPS redirect in `.htaccess`

2. **Update PHP:**
   - Keep PHP version up to date
   - Disable PHP error display in production

3. **Regular Backups:**
   - Backup website files weekly
   - Backup database if using one

4. **Monitor Logs:**
   - Check error logs regularly
   - Monitor for suspicious activity

5. **Keep Software Updated:**
   - Update PHP regularly
   - Update any plugins or libraries

---

## 🐛 Troubleshooting

### Issue: Age Gate Not Appearing

**Solution:**
- Clear browser cookies
- Check JavaScript is enabled
- Verify `verify-age.php` file exists

### Issue: Games Not Loading

**Solution:**
- Check file paths in game files
- Verify PHP is processing .php files
- Check browser console for errors
- Ensure all files were uploaded

### Issue: CSS/Images Not Loading

**Solution:**
- Verify `SITE_URL` in config.php is correct
- Check file permissions (644 for files)
- Clear browser cache
- Check server error logs

### Issue: Contact Form Not Working

**Solution:**
- Verify PHP mail() function is enabled
- Check server error logs
- Test form submission
- Verify email configuration

### Issue: Slow Page Load

**Solution:**
- Enable gzip compression
- Optimize images
- Use browser caching
- Consider CDN for static assets

---

## 📊 Monitoring & Maintenance

### Weekly Tasks

- [ ] Check error logs
- [ ] Test all games
- [ ] Verify all pages load
- [ ] Check email functionality

### Monthly Tasks

- [ ] Review analytics
- [ ] Check security headers
- [ ] Update content if needed
- [ ] Backup website files

### Quarterly Tasks

- [ ] Security audit
- [ ] Performance review
- [ ] Update PHP/software
- [ ] Review legal compliance

---

## 🆘 Getting Help

### Documentation

- Check `README.md` for detailed information
- Review code comments in PHP files
- Check CSS comments for styling details

### Common Issues

Most issues are related to:
1. Incorrect `SITE_URL` in config.php
2. Missing files or incorrect permissions
3. PHP version incompatibility
4. SSL/HTTPS configuration

### Support Resources

- PHP Documentation: https://www.php.net/docs.php
- HTML/CSS Reference: https://developer.mozilla.org/
- Web Hosting Support: Contact your hosting provider

---

## 📝 Important Notes

1. **This is Entertainment-Only:**
   - No real money transactions
   - Virtual coins have no real value
   - Clearly stated on all pages

2. **Age Restriction:**
   - 18+ only
   - Age gate enforced
   - Compliant with regulations

3. **Google Ads Compliant:**
   - No gambling
   - No real money
   - Clear messaging
   - Complete legal documentation

4. **No Login Required:**
   - Users can play immediately
   - No registration needed
   - No personal data collection

---

## 🎯 Next Steps

1. **Extract the files**
2. **Test locally** (optional)
3. **Upload to hosting**
4. **Update configuration**
5. **Set up SSL/HTTPS**
6. **Point domain**
7. **Test all features**
8. **Launch!**

---

## 📞 Contact Information

For questions about the website:

**Email:** support@apnafantasy.com  
**Website:** https://apnafantasy.com

---

## ✅ You're All Set!

Your Apna Fantasy website is ready to launch. Follow the steps above and you'll be live in no time!

**Happy gaming! 🎰**

---

**Version:** 1.0  
**Last Updated:** January 16, 2026  
**Status:** Production Ready
