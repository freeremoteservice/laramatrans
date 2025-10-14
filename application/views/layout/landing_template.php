<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'TrustAuto GmbH - Sicherer Autokauf mit persönlichem Berater'; ?></title>
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
    <header style="padding: 5px 0;">
        <div class="container header-container">
            <div class="logo">
                <img src="<?php echo base_url('public/img/logo.png'); ?>" alt="TrustAuto GmbH" style="height: 68px;">
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
                    <p>&copy; 2023 TrustAuto GmbH. Alle Rechte vorbehalten.</p>
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
</body>
</html>

