<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Larama Transport & Trust GmbH'; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('public/img/favicon.ico'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- External CSS for Landing Page -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/landing-page.css'); ?>">
    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css_file): ?>
            <link rel="stylesheet" href="<?php echo base_url($css_file); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <!-- Header -->
    <header style="padding: 10px 0;">
        <div class="container header-container">
            <div class="logo">
                <img src="<?php echo base_url('public/img/logo.png'); ?>" alt="<?= WEBSITE_NAME; ?>" style="height: 50px;">
            </div>
            <?php if (isset($show_full_nav) && $show_full_nav): ?>
                <!-- Full Navigation for Landing Page -->
                <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
                <nav id="mainNav">
                    <ul>
                        <li><a href="#home" class="nav-link active">Startseite</a></li>
                        <li><a href="#how-it-works" class="nav-link">So funktioniert's</a></li>
                        <li><a href="#benefits" class="nav-link">Vorteile</a></li>
                        <li><a href="#services" class="nav-link">Leistungen</a></li>
                        <li><a href="#specialization" class="nav-link">Transport</a></li>
                        <li><a href="#tracking" class="nav-link">Sendungsverfolgung</a></li>
                        <li><a href="#faq" class="nav-link">FAQ</a></li>
                        <li><a href="#contact" class="nav-link">Kontakt</a></li>
                    </ul>
                </nav>
            <?php else: ?>
                <!-- Simple Navigation for Other Pages -->
                <nav>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>">Zurück zur Startseite</a></li>
                        <?php if ($this->session->userdata('status') == 'logged_in'): ?>
                            <li><a href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </header>

    <!-- Main Content -->
    <?php if (isset($mainContent)): ?>
        <?php $this->load->view($mainContent); ?>
    <?php else: ?>
        <?php echo isset($page_content) ? $page_content : ''; ?>
    <?php endif; ?>

    <!-- Footer -->
    <?php if (isset($show_full_footer) && $show_full_footer): ?>
        <!-- Full Footer for Landing Page -->
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-column">
                        <h3><?= WEBSITE_NAME ?></h3>
                        <p>Ihr professioneller Partner für sicheren Fahrzeugkauf mit Treuhandservice und persönlicher Betreuung.</p>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Leistungen</h3>
                        <ul>
                            <li><a href="<?= base_url() . '#services'; ?>"><i class="fas fa-chevron-right"></i> Treuhandservice</a></li>
                            <li><a href="<?= base_url() . '#process'; ?>"><i class="fas fa-chevron-right"></i> Kaufabwicklung</a></li>
                            <li><a href="<?= base_url() . '#specialization'; ?>"><i class="fas fa-chevron-right"></i> Transport-Services</a></li>
                            <li><a href="<?= base_url() . '#tracking'; ?>"><i class="fas fa-chevron-right"></i> Sendungsverfolgung</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Rechtliches</h3>
                        <ul>
                            <li><a href="<?= base_url('site/privacy_policy') ?>"><i class="fas fa-chevron-right"></i> Datenschutz</a></li>
                            <li><a href="<?= base_url('site/terms_and_conditions') ?>"><i class="fas fa-chevron-right"></i> AGB</a></li>
                            <li><a href="<?= base_url() . '#contact'; ?>"><i class="fas fa-chevron-right"></i> Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="company-info">
                    <p><strong><?= WEBSITE_NAME ?></strong></p>
                    <p><?= WEBSITE_ADDRESS; ?></p>
                    <p>Telefon: <?= WEBSITE_PHONE; ?> • E-Mail: <?= WEBSITE_EMAIL; ?></p>
                </div>

                <div class="footer-bottom">
                    <p>&copy; 2025 <?= WEBSITE_NAME ?>. Alle Rechte vorbehalten.</p>
                </div>
            </div>
        </footer>

        <!-- Back to Top Button -->
        <a href="#" class="back-to-top" id="backToTop">
            <i class="fas fa-chevron-up"></i>
        </a>
    <?php else: ?>
        <!-- Simple Footer for Other Pages -->
        <footer class="footer-simple">
            <div class="container">
                <div class="footer-bottom">
                    <p>&copy; 2025 <?= WEBSITE_NAME ?>. Alle Rechte vorbehalten.</p>
                    <p><a href="<?php echo base_url(); ?>">Zurück zur Startseite</a></p>
                </div>
            </div>
        </footer>
    <?php endif; ?>
    
    <!-- Define base_url for JavaScript -->
    <script>
        const base_url = '<?php echo base_url(); ?>';
    </script>
    
    <?php if (isset($show_full_nav) && $show_full_nav): ?>
        <script src="<?php echo base_url('public/js/landing-page.js'); ?>"></script>
    <?php endif; ?>
    
    <?php if (isset($additional_js)): ?>
        <?php foreach ($additional_js as $js_file): ?>
            <script src="<?php echo base_url($js_file); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Cookie Consent Popup -->
    <div id="cookieConsent" class="cookie-consent" style="display: none;">
        <div class="cookie-content">
            <div class="cookie-icon">
                <i class="fas fa-cookie-bite"></i>
            </div>
            <div class="cookie-text">
                <h4>Cookie-Einstellungen</h4>
                <p>Wir verwenden Cookies, um Ihnen die beste Erfahrung auf unserer Website zu bieten. Einige Cookies sind notwendig für die Funktionalität der Website, andere helfen uns, diese Website und Ihre Erfahrung zu verbessern.</p>
            </div>
            <div class="cookie-actions">
                <button id="cookieDecline" class="cookie-btn cookie-btn-secondary">Ablehnen</button>
                <button id="cookieAccept" class="cookie-btn cookie-btn-primary">Alle akzeptieren</button>
            </div>
        </div>
    </div>

    <style>
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            border-top: 1px solid rgba(79, 195, 247, 0.3);
            backdrop-filter: blur(10px);
            z-index: 9999;
            padding: 1.5rem;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.3);
            transform: translateY(100%);
            transition: transform 0.3s ease-in-out;
        }

        .cookie-consent.show {
            transform: translateY(0);
        }

        .cookie-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .cookie-icon {
            flex-shrink: 0;
        }

        .cookie-icon i {
            font-size: 2rem;
            color: #4fc3f7;
        }

        .cookie-text {
            flex: 1;
            min-width: 300px;
        }

        .cookie-text h4 {
            color: #ffffff;
            margin: 0 0 0.5rem 0;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .cookie-text p {
            color: #e8f4fd;
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .cookie-actions {
            display: flex;
            gap: 1rem;
            flex-shrink: 0;
        }

        .cookie-btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-primary {
            background: linear-gradient(135deg, #4fc3f7, #29b6f6);
            color: #ffffff;
        }

        .cookie-btn-primary:hover {
            background: linear-gradient(135deg, #29b6f6, #0288d1);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(79, 195, 247, 0.4);
        }

        .cookie-btn-secondary {
            background: rgba(255,255,255,0.1);
            color: #e8f4fd;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .cookie-btn-secondary:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .cookie-content {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .cookie-text {
                min-width: auto;
            }

            .cookie-actions {
                width: 100%;
                justify-content: center;
            }

            .cookie-btn {
                flex: 1;
                max-width: 150px;
            }
        }
    </style>

    <script>
        // Cookie Consent Management
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsent = document.getElementById('cookieConsent');
            const acceptBtn = document.getElementById('cookieAccept');
            const declineBtn = document.getElementById('cookieDecline');

            // Check if user has already made a choice
            if (!localStorage.getItem('cookieConsent')) {
                // Show popup after a short delay
                setTimeout(() => {
                    cookieConsent.style.display = 'block';
                    setTimeout(() => {
                        cookieConsent.classList.add('show');
                    }, 100);
                }, 1000);
            }

            // Accept cookies
            acceptBtn.addEventListener('click', function() {
                localStorage.setItem('cookieConsent', 'accepted');
                hideCookieConsent();
                // Enable all cookies/analytics here
                console.log('Cookies accepted');
            });

            // Decline cookies
            declineBtn.addEventListener('click', function() {
                localStorage.setItem('cookieConsent', 'declined');
                hideCookieConsent();
                // Disable non-essential cookies here
                console.log('Cookies declined');
            });

            function hideCookieConsent() {
                cookieConsent.classList.remove('show');
                setTimeout(() => {
                    cookieConsent.style.display = 'none';
                }, 300);
            }

            // Optional: Show cookie settings on privacy policy page
            if (window.location.pathname.includes('privacy_policy')) {
                const showSettingsBtn = document.createElement('button');
                showSettingsBtn.textContent = 'Cookie-Einstellungen';
                showSettingsBtn.className = 'cookie-btn cookie-btn-secondary';
                showSettingsBtn.style.marginTop = '1rem';
                showSettingsBtn.addEventListener('click', function() {
                    localStorage.removeItem('cookieConsent');
                    cookieConsent.style.display = 'block';
                    cookieConsent.classList.add('show');
                });
                
                // Add to privacy policy page if it exists
                const privacyContent = document.querySelector('.privacy-body');
                if (privacyContent) {
                    privacyContent.appendChild(showSettingsBtn);
                }
            }
        });
    </script>
</body>
</html>

