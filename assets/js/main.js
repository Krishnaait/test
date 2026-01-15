// Apna Fantasy - Main JavaScript
// Version: 1.0 | Last Updated: January 16, 2026

// Mobile Menu Toggle
function toggleMenu() {
    const navMenu = document.getElementById('navMenu');
    if (navMenu) {
        navMenu.style.display = navMenu.style.display === 'none' ? 'flex' : 'none';
    }
}

// Close mobile menu when link is clicked
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            const navMenu = document.getElementById('navMenu');
            if (navMenu) {
                navMenu.style.display = 'none';
            }
        });
    });

    // Initialize animations
    initializeAnimations();
});

// Initialize scroll animations
function initializeAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'slideInUp 0.8s ease forwards';
            }
        });
    });

    document.querySelectorAll('.card').forEach(card => {
        observer.observe(card);
    });
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Form submission handler
function handleFormSubmit(formId, endpoint) {
    const form = document.getElementById(formId);
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);
        
        fetch(endpoint, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                showNotification('Message sent successfully!', 'success');
                form.reset();
            } else {
                showNotification('Error sending message. Please try again.', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showNotification('An error occurred. Please try again.', 'error');
        });
    });
}

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 1.5rem;
        background: ${type === 'success' ? '#4CAF50' : type === 'error' ? '#f44336' : '#2196F3'};
        color: white;
        border-radius: 5px;
        z-index: 3000;
        animation: slideInUp 0.3s ease;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    `;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.style.animation = 'slideInDown 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Fullscreen game handler
function toggleFullscreen(element) {
    if (!document.fullscreenElement) {
        element.requestFullscreen().catch(err => {
            console.error(`Error attempting to enable fullscreen: ${err.message}`);
        });
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        }
    }
}

// Game navigation helper
function goToGame(gameName) {
    window.location.href = `/games/${gameName}.php`;
}

function goHome() {
    window.location.href = '/';
}

// Responsive design helpers
function isTablet() {
    return window.innerWidth <= 1024 && window.innerWidth > 768;
}

function isMobile() {
    return window.innerWidth <= 768;
}

// Lazy load images
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => imageObserver.observe(img));
}

// Keyboard shortcuts
document.addEventListener('keydown', function(event) {
    // Escape key to exit fullscreen
    if (event.key === 'Escape' && document.fullscreenElement) {
        document.exitFullscreen();
    }
});

// Performance monitoring
window.addEventListener('load', function() {
    if (window.performance && window.performance.timing) {
        const perfData = window.performance.timing;
        const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
        console.log('Page load time:', pageLoadTime + 'ms');
    }
});

// Service Worker registration (for PWA support)
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js').catch(err => {
        console.log('Service Worker registration failed:', err);
    });
}

// Dark mode preference
function initializeDarkMode() {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
    if (prefersDark.matches) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
}

initializeDarkMode();

// Export functions for use in other scripts
window.GameFunctions = {
    toggleFullscreen,
    goToGame,
    goHome,
    showNotification,
    handleFormSubmit,
    isTablet,
    isMobile
};
