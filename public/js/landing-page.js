// Mobile Menu Toggle
document.getElementById('mobileMenuBtn').addEventListener('click', function() {
    document.getElementById('mainNav').classList.toggle('active');
});

// Navigation
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Update active nav link
        document.querySelectorAll('.nav-link').forEach(item => {
            item.classList.remove('active');
        });
        this.classList.add('active');
        
        // Close mobile menu if open
        document.getElementById('mainNav').classList.remove('active');
        
        // Scroll to section
        const targetId = this.getAttribute('href');
        if(targetId !== '#') {
            // Special handling for Startseite (home)
            if(targetId === '#home') {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            } else {
                document.querySelector(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
});

// FAQ Accordion
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        const isActive = question.classList.contains('active');
        
        // Close all other FAQs
        document.querySelectorAll('.faq-question').forEach(q => {
            if (q !== question) {
                q.classList.remove('active');
                q.nextElementSibling.classList.remove('active');
            }
        });
        
        // Toggle current FAQ
        if (!isActive) {
            question.classList.add('active');
            answer.classList.add('active');
        } else {
            question.classList.remove('active');
            answer.classList.remove('active');
        }
    });
});

// Tracking Functionality
document.getElementById('track-btn').addEventListener('click', function() {
    const trackingNumber = document.getElementById('tracking-number').value.trim();
    const agreeTerms = document.getElementById('agree-terms').checked;
    
    if (!trackingNumber) {
        alert('Bitte geben Sie eine Sendungsnummer ein.');
        return;
    }
    
    if (!agreeTerms) {
        alert('Bitte akzeptieren Sie die AGB der TrustAuto GmbH.');
        return;
    }
    
    // goes here
});

// Enter key support for tracking input
document.getElementById('tracking-number').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        document.getElementById('track-btn').click();
    }
});

// Back to Top Button
const backToTopButton = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopButton.classList.add('visible');
    } else {
        backToTopButton.classList.remove('visible');
    }
});

backToTopButton.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Scroll Animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in-up').forEach(el => {
    observer.observe(el);
});

