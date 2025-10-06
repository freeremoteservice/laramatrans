<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- Hero Section Start -->
    <section class="hero-section hero-1 fix">
        <div class="array-button">
            <button class="image-array-left">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('public/img/hero/hero-1.jpg');">
                        <div class="overlay-shape">
                            <img src="public/img/hero/hero-1.jpg" alt="img" />
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Kaufen Sie Ihr Fahrzeug einfach online. Sie wählen online aus.
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Wir checken und liefern
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('public/img/hero/hero-2.jpg');">
                        <div class="overlay-shape">
                            <img src="public/img/hero/hero-2.jpg" alt="img" />
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Kaufen Sie Ihr Fahrzeug einfach online. Sie wählen online aus.
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Wir checken und liefern
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pick Up Location Section Start -->
    <div class="pickup-loaction-area bg-cover" style="background-image: url('assets/img/brand-bg.png');">
        <div class="container">
            <form action="<?= base_url('track/submit') ?>" method="post" class="tracking-form pickup-wrapper wow fadeInUp" data-wow-delay=".4s">
                <div class="pickup-items" style="text-align: center">
                    <label class="field-label mb-0">Ihre Transaktions-ID</label>
                </div>
                <div class="pickup-items" style="flex-grow: 1; text-align: center">
                    <input id="tracking" class="form-control" name="tracking" type="text" placeholder="Beispiel: AB12345" />
                </div>
                <div class="pickup-items" style="text-align: center">
                    <button class="pickup-btn" type="submit">
                        Suchen
                    </button>
                </div>
            </form>
            <div class="brand-wrapper pt-80 pb-80">
                <div class="array-button">
                    <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
                    <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
                </div>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/01.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/02.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/03.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/04.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/05.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/06.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/07.png') ?>" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="<?= base_url('public/img/brand/08.png') ?>" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Benefit Section Start -->
    <section class="feature-benefit section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Warum Ewering wählen?
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg1.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="<?= base_url('site/services') ?>">
                                    21 Tage <br>
                                    Geld-zurück-Garantie
                                </a>
                            </h4>
                            <p>Wenn Ihnen das Auto nicht zusagt, geben Sie es uns einfach zurück.</p>
                            <div class="icon" style="background-color: white;">
                                <img src="<?= base_url('public/img/feature-benefit/icon-1.png') ?>" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="<?= base_url('site/services') ?>" class="link-btn">Mehr <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg2.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="<?= base_url('site/services') ?>">
                                    Kauf <br>
                                    ohne Risiko
                                </a>
                            </h4>
                            <p>Wir bürgen für den technischen Zustand jedes verkauften Autos.</p>
                            <div class="icon" style="background-color: white;">
                                <img src="<?=  base_url('public/img/feature-benefit/icon-2.png') ?>" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="<?= base_url('site/services') ?>" class="link-btn">Mehr <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg3.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="<?= base_url('site/services') ?>">
                                    6 Monate <br>
                                    Garantie
                                </a>
                            </h4>
                            <p>Zudem erhalten Sie von uns 6 Monate Garantie.</p>
                            <div class="icon" style="background-color: white;">
                                <img src="<?= base_url('public/img/feature-benefit/icon-3.png') ?>" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="<?= base_url('site/services') ?>" class="link-btn">Mehr <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="testimonial-bg-shape">
            <img src="assets/img/testimonial/testimonial-bg.jpg" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Bewertungen</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Das sagen unsere Kundinnen und Kunden über Ewering?
                    </h2>
                </div>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Echte Profis mit perfektem Prozess! Keine Wracks, nur top Fahrzeuge. Kundenservice so gut wie die Autos – absolut empfehlenswert!
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-1.png');"></div>
                                <div class="content">
                                    <h5>
                                        Sebastian J.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Ein sicherer Zahlungsdienst, besonders für grenzüberschreitende Transaktionen. Transparent, zuverlässig und einfach.
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-2.png');"></div>
                                <div class="content">
                                    <h5>
                                        Konrad T.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Der größte Vorteil: Keine Behörden-Gänge! Ewering erledigt alles. Einfach Auto wählen und vor die Haustür liefern lassen – stressfrei!
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-3.png');"></div>
                                <div class="content">
                                    <h5>
                                        Heinz R.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Unser Auto haben wir über Ewering erhalten – absolut begeistert! Schnelle, unkomplizierte Online-Abwicklung und top Kundenservice. Das Fahrzeug entsprach genau der Beschreibung. Klare Empfehlung für stressfreien Autokauf!
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-4.png');"></div>
                                <div class="content">
                                    <h5>
                                        Anna B.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Meine Transaktion über Ewering verlief reibungslos – keine Verzögerungen, super Kundenservice. Vielen Dank!
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-5.png');"></div>
                                <div class="content">
                                    <h5>
                                        Sophie K.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Ein besonderer Dank geht an Frau Daniela Ewering für die hervorragende Abwicklung meines Fahrzeugverkaufs. Gerne wieder – absolut empfehlenswert!
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-6.png');"></div>
                                <div class="content">
                                    <h5>
                                        Friedrich S.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Ich schätze, dass Ewering alles erledigt hat – Ummeldung, Anmeldung und Versicherung. Das Auto wurde vollständig vorbereitet geliefert. Perfekt!
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-7.png');"></div>
                                <div class="content">
                                    <h5>
                                        Mathias S.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        Ich hatte die Möglichkeit, eine Transaktion über Ewering abzuwickeln, und alles verlief reibungslos. Es gab keine Verzögerungen bei der Zahlungsabwicklung, und der Kundenservice war stets erreichbar und hilfsbereit. Vielen Dank dafür!
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('public/img/testimonial/client-8.png');"></div>
                                <div class="content">
                                    <h5>
                                        Christopher S.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section fix section-padding pt-0">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="color-shape">
                                <img src="<?= base_url('assets/img/about/secondary-shape-color-full.png') ?>" alt="shape-img">
                            </div>
                            <div class="car-shape wow fadeInUp" data-wow-delay=".7s">
                                <img src="<?= base_url('assets/img/about/car-shape.png') ?>" alt="shape-img">
                            </div>
                            <div class="counter-content wow fadeInLeft" data-wow-delay=".4s">
                                <h2 class="text-white"><span class="count">10</span></h2>
                                <p class="text-white">
                                    Jahre <br>
                                    Erfahrungen
                                </p>
                            </div>
                            <div class="about-image-1 wow fadeInDown" data-wow-delay=".3s">
                                <img src="<?= base_url('public/img/about/01.jpg') ?>" alt="about-image">
                            </div>
                            <div class="about-image-2 wow fadeInLeft" data-wow-delay=".5s">
                                <img src="<?= base_url('public/img/about/02.jpg') ?>" alt="about-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Über uns</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Mit uns wird der Kauf eines Gebrauchtwagens zum Vergnügen
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Mit uns kaufen oder verkaufen Sie Ihr gebrauchtes Fahrzeug komfortabel und sicher online. Wir bieten Ihnen die umfassende Dienstleistungen wie technische Prüfung, Treuhandservice, Administration, Transport, Finanzierung, Versicherung und Service.
                            </p>
                            <div class="about-list-item wow fadeInUp" data-wow-delay=".7s">
                                <ul>
                                    <li>
                                        Treuhandservice
                                    </li>
                                    <li>
                                        CarAudit
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        Lieferung
                                    </li>
                                    <li>
                                        Garantie
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        Versicherung
                                    </li>
                                    <li>
                                        Zulassung
                                    </li>
                                </ul>
                            </div>
                            <a href="<?= base_url('site/services') ?>" class="theme-btn wow fadeInUp" data-wow-delay=".8s">Mehr</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Wie funktioniert es?
                </h2>
            </div>
        </div>
        <div class="car-rentals-wrapper">
            <div class="array-button">
                <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                <button class="array-next"><i class="far fa-chevron-right"></i></button>
            </div>
            <div class="swiper car-rentals-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="public/img/how-it-works-1-2x.jpg" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    01.
                                </div>
                                <h4><a href="<?= base_url('site/howitworks') ?>">Wählen Sie Ihr Fahrzeug</a></h4>
                                <h6><span>Derzeit gibt es auf dem Gebrauchtwagenmarkt nahezu Millionen verschiedener Fahrzeuge. Ob weiß, schwarz, rot oder blau, vom kompakten Kleinwagen bis zum geräumigen SUV – nehmen Sie sich die Zeit und finden Sie das perfekte Auto für Ihre Bedürfnisse.</span></h6>
                                <a href="<?= base_url('site/howitworks') ?>" class="theme-btn bg-color w-100 text-center mt-3">Mehr erfahren, wie das funktioniert? <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="public/img/how-it-works-2-2x.jpg" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    02.
                                </div>
                                <h4><a href="<?= base_url('site/howitworks') ?>">Wir checken Ihr Fahrzeug</a></h4>
                                <h6><span>Ein zertifizierter KFZ-Experte wird Ihr Fahrzeug anhand unseres CarAudits gründlich überprüfen. Sie entscheiden sich, nachdem Ihnen das CarAudit vorliegt.</span></h6>
                                <a href="<?= base_url('site/howitworks') ?>" class="theme-btn bg-color w-100 text-center mt-3">Mehr erfahren, wie das funktioniert? <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="public/img/how-it-works-3-2x.jpg" alt="img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    03.
                                </div>
                                <h4><a href="<?= base_url('site/howitworks') ?>">Lieferung bequem nach Hause</a></h4>
                                <h6><span>Wir kümmern uns um die Zulassung und um die Lieferung zu Ihnen nach Hause.</span></h6>
                                <a href="<?= base_url('site/howitworks') ?>" class="theme-btn bg-color w-100 text-center mt-3">Mehr erfahren, wie das funktioniert? <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfact Section Start -->
    <section class="funfact-section section-padding bg-cover"
        style="background-image: url('public/img/funfact-bg.jpg');">
        <div class="container">
            <div class="funfact-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-0">
                            <img src="assets/img/sub-icon-2.png" alt="icon-img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">Ewering in Zahlen</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                                Ewering eine steile Entwicklung absolviert. <br>
                                Und die spiegelt sich auch in Zahlen wieder.
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="funfact-counter-area">
                            <div class="funfact-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <img src="assets/img/icon/car.png" alt="img">
                                </div>
                                <h2><span class="count">990</span></h2>
                                <p>
                                    Fahrzeuge <br>
                                    verkauft
                                </p>
                            </div>
                            <div class="funfact-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="assets/img/icon/center.png" alt="img">
                                </div>
                                <h2><span class="count">230</span></h2>
                                <p>
                                    Hauslieferungen
                                </p>
                            </div>
                            <div class="funfact-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <img src="assets/img/icon/like.png" alt="img">
                                </div>
                                <h2><span class="count">660</span></h2>
                                <p>
                                    Zufriedene <br>
                                    Kunden
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Rental Section Start -->
    <section class="cta-rental-section bg-cover fix section-padding"
        style="background-image: url('assets/img/cta/bg-app.jpg');">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-rental-items">
                        <h4 class="wow fadeInUp" data-wow-delay=".3s">Wir freuen uns, Ihnen bald unsere neue mobile App anzubieten! Sie bietet mehr Komfort, Flexibilität und Service – Zugriff auf Produkte, Bestellungen und Anfragen, jederzeit und überall.</h4>
                        <div class="rental-app-button">
                            <button class="app-button-items wow fadeInUp" data-wow-delay=".7s">
                                <span class="button-icon"><i class="fa-solid fa-play"></i></span>
                                <span class="button-text text-start">
                                    <span class="text">Get in</span> <br>
                                    <span class="headding-text">Google Play</span>
                                </span>
                            </button>
                            <button class="app-button-items style-2 wow fadeInUp" data-wow-delay=".8s">
                                <span class="button-icon"><i class="fa-brands fa-apple"></i></span>
                                <span class="button-text text-start">
                                    <span class="text">Get in</span> <br>
                                    <span class="headding-text">Play Store</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="mobile-remons-image">
                        <img src="<?= base_url('public/img/mobile-remons.png') ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Cheap Rental Section Start -->
    <section class="cta-cheap-rental-section">
        <div class="container">
            <div class="cta-cheap-rental">
                <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay="
                    .3s">
                    <div class="logo-thumb">
                        <a href="index.php">
                            <img src="<?= base_url('public/img/logo-white.png') ?>" alt="logo-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>