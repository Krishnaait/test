// Toast Notification System
// Version: 1.0 | Last Updated: January 16, 2026

const toast = {
    container: null,
    queue: [],
    isAnimating: false,

    init() {
        if (!this.container) {
            this.container = document.createElement('div');
            this.container.className = 'toast-container';
            document.body.appendChild(this.container);
        }
    },

    show(title, message = '', type = 'info', details = {}, duration = 3000) {
        this.init();

        const toastElement = document.createElement('div');
        toastElement.className = `toast ${type}`;

        let detailsHtml = '';
        if (Object.keys(details).length > 0) {
            detailsHtml = '<div class="toast-details">';
            for (const [key, value] of Object.entries(details)) {
                detailsHtml += `
                    <div class="toast-detail-item">
                        <span class="toast-detail-label">${key}:</span>
                        <span class="toast-detail-value">${value}</span>
                    </div>
                `;
            }
            detailsHtml += '</div>';
        }

        toastElement.innerHTML = `
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <div style="flex: 1;">
                    <div class="toast-title">${title}</div>
                    ${message ? `<div class="toast-message">${message}</div>` : ''}
                    ${detailsHtml}
                </div>
                <button class="toast-close" onclick="toast.close(this)">&times;</button>
            </div>
            <div class="toast-progress"></div>
        `;

        this.container.appendChild(toastElement);

        // Auto-remove after duration
        setTimeout(() => {
            if (toastElement.parentElement) {
                this.close(toastElement.querySelector('.toast-close'));
            }
        }, duration);
    },

    close(button) {
        const toastEl = button.closest('.toast');
        toastEl.classList.add('removing');
        setTimeout(() => {
            toastEl.remove();
        }, 400);
    },

    success(title, message = '', details = {}) {
        this.show(title, message, 'success', details, 4000);
    },

    error(title, message = '', details = {}) {
        this.show(title, message, 'error', details, 4000);
    },

    warning(title, message = '', details = {}) {
        this.show(title, message, 'warning', details, 3500);
    },

    info(title, message = '', details = {}) {
        this.show(title, message, 'info', details, 3000);
    }
};

// Initialize toast on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    toast.init();
});
