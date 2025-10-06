<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'TrustAuto GmbH - Sicherer Autokauf mit persönlichem Berater'; ?></title>
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
    <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-car logo-icon"></i>
                <a href="<?php echo base_url(); ?>" style="color: inherit; text-decoration: none;">
                    TrustAuto<span>GmbH</span>
                </a>
            </div>
            <?php if (isset($show_full_nav) && $show_full_nav): ?>
                <!-- Full Navigation for Landing Page -->
                <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
                <nav id="mainNav">
                    <ul>
                        <li><a href="#home" class="nav-link active">Startseite</a></li>
                        <li><a href="#services" class="nav-link">Leistungen</a></li>
                        <li><a href="#process" class="nav-link">Prozess</a></li>
                        <li><a href="#specialization" class="nav-link">Transport-Services</a></li>
                        <li><a href="#reviews" class="nav-link">Bewertungen</a></li>
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
                        <h3>TrustAuto GmbH</h3>
                        <p>Ihr professioneller Partner für sicheren Fahrzeugkauf mit Treuhandservice und persönlicher Betreuung.</p>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Leistungen</h3>
                        <ul>
                            <li><a href="#services"><i class="fas fa-chevron-right"></i> Treuhandservice</a></li>
                            <li><a href="#process"><i class="fas fa-chevron-right"></i> Kaufabwicklung</a></li>
                            <li><a href="#specialization"><i class="fas fa-chevron-right"></i> Transport-Services</a></li>
                            <li><a href="#tracking"><i class="fas fa-chevron-right"></i> Sendungsverfolgung</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Unternehmen</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Über uns</a></li>
                            <li><a href="#contact"><i class="fas fa-chevron-right"></i> Kontakt</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Karriere</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Partner</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h3>Rechtliches</h3>
                        <ul>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Impressum</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Datenschutz</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> AGB</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Widerrufsrecht</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="company-info">
                    <p><strong>TrustAuto GmbH</strong></p>
                    <p>Musterstraße 123 • 10115 Berlin</p>
                    <p>Telefon: +49 (0) 30 12345678 • E-Mail: info@trustauto-gmbh.de</p>
                    <p>Geschäftsführer: Max Mustermann • Handelsregister: HRB 123456</p>
                </div>
                
                <div class="footer-bottom">
                    <p>&copy; 2023 TrustAuto GmbH. Alle Rechte vorbehalten.</p>
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
                    <p>&copy; 2023 TrustAuto GmbH. Alle Rechte vorbehalten.</p>
                    <p><a href="<?php echo base_url(); ?>">Zurück zur Startseite</a></p>
                </div>
            </div>
        </footer>
    <?php endif; ?>
    
    <?php if (isset($show_full_nav) && $show_full_nav): ?>
        <script src="<?php echo base_url('public/js/landing-page.js'); ?>"></script>
    <?php endif; ?>
    
    <?php if (isset($additional_js)): ?>
        <?php foreach ($additional_js as $js_file): ?>
            <script src="<?php echo base_url($js_file); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>

