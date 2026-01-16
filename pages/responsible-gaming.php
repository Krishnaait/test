<?php
require_once '../includes/config.php';
$page_title = "Responsible Gaming";
include '../includes/header.php';
?>

<section class="page-content">
    <h1 class="page-header">Responsible Gaming</h1>
    
    <div class="page-disclaimer">
        <strong>⚠️ IMPORTANT:</strong> This is a 100% free-to-play entertainment platform. Virtual coins have NO real money value. All games are for entertainment purposes only. Must be 18+ to play.
    </div>

    <div class="page-card">
        <p >
            <strong>Last Updated:</strong> <?php echo get_last_updated(); ?>
        </p>

        <h3 >Our Commitment to Responsible Entertainment</h3>
        <p >
            At <?php echo SITE_NAME; ?>, we are committed to providing a safe, entertaining, and responsible gaming environment. While our platform is 100% free-to-play with no real money involved, we believe in promoting healthy gaming habits and supporting our users' wellbeing.
        </p>

        <h3 >Understanding Our Platform</h3>
        <div style="background: rgba(255, 215, 0, 0.1); padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem;">
            <p >
                <strong style="color: var(--primary-color);">This is NOT Gambling:</strong> Our platform is entertainment-only. Virtual coins have no real money value and cannot be cashed out. There are no real stakes or real winnings. This is purely for fun and entertainment.
            </p>
        </div>

        <h3 >Tips for Responsible Entertainment</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >⏰ Set Time Limits</h4>
                <p style="color: var(--text-secondary);">
                    Decide how long you'll play before starting. Take regular breaks every 30-60 minutes. Gaming should not interfere with sleep, work, or daily responsibilities.
                </p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >🎯 Play for Fun</h4>
                <p style="color: var(--text-secondary);">
                    Remember that gaming is entertainment. Do not view it as a way to make money or solve financial problems. Virtual coins have no real value.
                </p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >💰 Budget Awareness</h4>
                <p style="color: var(--text-secondary);">
                    Even though this is free-to-play, be mindful of your time investment. Do not let gaming consume excessive amounts of your time or attention.
                </p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >👥 Maintain Balance</h4>
                <p style="color: var(--text-secondary);">
                    Balance gaming with other activities. Spend time with family, friends, exercise, and pursue other hobbies. Gaming should be one of many activities.
                </p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >🚫 Avoid Chasing Losses</h4>
                <p style="color: var(--text-secondary);">
                    If you lose virtual coins, do not try to "win them back" immediately. Take a break and return when you're in a positive mindset.
                </p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >🧠 Self-Awareness</h4>
                <p style="color: var(--text-secondary);">
                    Be honest with yourself about your gaming habits. If gaming is affecting your mood, relationships, or responsibilities, seek help.
                </p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >👨‍👩‍👧‍👦 Protect Children</h4>
                <p style="color: var(--text-secondary);">
                    This platform is 18+ only. Do not allow children to access your account. Help protect young people from inappropriate content.
                </p>
            </div>

            <div style="background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: 10px; border: 1px solid rgba(255, 215, 0, 0.2);">
                <h4 >📞 Seek Support</h4>
                <p style="color: var(--text-secondary);">
                    If you feel gaming is becoming problematic, reach out to friends, family, or professional counselors for support.
                </p>
            </div>
        </div>

        <h3 >Warning Signs</h3>
        <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 1rem;">
            Consider seeking help if you experience any of the following:
        </p>
        <ul >
            <li>Spending excessive time gaming that interferes with daily responsibilities</li>
            <li>Feeling anxious or irritable when not gaming</li>
            <li>Neglecting family, friends, or work due to gaming</li>
            <li>Lying to others about time spent gaming</li>
            <li>Gaming as an escape from problems or negative emotions</li>
            <li>Difficulty controlling gaming time</li>
            <li>Experiencing sleep problems due to late-night gaming</li>
            <li>Physical symptoms like eye strain or back pain from prolonged gaming</li>
        </ul>

        <h3 >Support Resources</h3>
        <p style="color: var(--text-secondary); line-height: 1.8; margin-bottom: 1rem;">
            If you need support or have concerns about gaming habits, consider reaching out to:
        </p>
        <ul >
            <li><strong style="color: var(--primary-color);">Mental Health Professionals:</strong> Therapists or counselors specializing in behavioral issues</li>
            <li><strong style="color: var(--primary-color);">Support Groups:</strong> Online or in-person communities for gaming concerns</li>
            <li><strong style="color: var(--primary-color);">Helplines:</strong> National mental health and addiction helplines</li>
            <li><strong style="color: var(--primary-color);">Friends & Family:</strong> Trusted people in your life who can provide support</li>
        </ul>

        <h3 >Our Commitment</h3>
        <p >
            We are committed to:
        </p>
        <ul >
            <li>Maintaining a 100% free-to-play platform with no real money involved</li>
            <li>Providing clear age verification (18+ only)</li>
            <li>Displaying responsible gaming information prominently</li>
            <li>Ensuring fair and random game outcomes</li>
            <li>Supporting users who need help with gaming concerns</li>
            <li>Continuously improving our responsible gaming practices</li>
        </ul>

        <h3 >Contact Us</h3>
        <p >
            If you have concerns about responsible gaming or need support:
        </p>
        <p style="color: var(--text-secondary);">
            <strong style="color: var(--primary-color);">Email:</strong> <a href="mailto:<?php echo COMPANY_EMAIL; ?>" style="color: var(--primary-color);"><?php echo COMPANY_EMAIL; ?></a><br>
        </p>

        <div style="background: rgba(255, 107, 53, 0.1); border-left: 4px solid var(--secondary-color); padding: 1rem; border-radius: 5px; margin-top: 2rem;">
            <p style="color: var(--text-secondary); font-size: 0.9rem;">
                <strong style="color: var(--secondary-color);">© <?php echo get_current_year(); ?> <?php echo COMPANY_NAME; ?></strong><br>
                Your wellbeing is important to us. Play responsibly and have fun!
            </p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
