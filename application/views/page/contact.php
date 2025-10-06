<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url(<?= base_url('public/img/bg-header-banner.png') ?>);">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="<?= base_url() ?>"> Home </a>
        </li>
        <li>
          <i class="fas fa-chevron-right"></i>
        </li>
        <li>
          Contact
        </li>
      </ul>
      <h1 class="wow fadeInUp" data-wow-delay=".5s">Contact</h1>
    </div>
  </div>
</div>

<!-- Contact Section Start -->
<section class="contact-section-1 fix section-padding">
  <div class="container">
    <div class="contact-wrapper-area">
      <div class="row g-4">
        <div class="col-lg-9">
          <div class="contact-content">
            <div class="section-title">
              <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp">
              <span class="wow fadeInUp" data-wow-delay=".2s">Kontaktiere uns</span>
              <p class="wow fadeInUp" data-wow-delay=".4s">
                Wir sind für dich da. Zögere nicht, uns zu kontaktieren, wenn du Verkaufsberatung, Unterstützung beim Online-Kauf, Informationen zu Fahrzeugdetails, Fragen zum Kaufprozess oder andere Anliegen hast.
              </p>
            </div>
            <form action="<?= base_url('action/send_email') ?>" id="contact-form" method="POST"
              class="contact-form-items mt-5 mt-md-0">
              <?php if (isset($contact_errors)) echo $contact_errors; ?>
              <?php if ($this->uri->segment(3) && $this->uri->segment(3) == 'success'): ?>
                <div class="success">Email sent!</div>
              <?php endif; ?>
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="form-clt">
                    <input type="text" name="name" id="name" placeholder="Dein Name" required />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-clt">
                    <input type="text" name="email" id="email2" placeholder="Deine E-Mail-Adresse" required />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-clt">
                    <input type="text" name="subject" id="subject" placeholder="Thema" required />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-clt">
                    <input type="text" name="phone" id="phone" placeholder="Telefon" required />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-clt">
                    <textarea name="message" id="message" placeholder="Deine Frage an uns" required ></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <?php if(isset($success_message) && !is_null($success_message)) { ?>
                  <div>
                    <span class="label success" style="width: 100%; line-height: 30px; margin-bottom: 15px; text-wrap: auto;">
                        <i class="fa fa-check"></i>
                        <?=$success_message;?>
                    </span>
                  </div>
                  <?php } else { ?>
                  <button type="submit" class="theme-btn">
                    Abschicken
                  </button>
                  <?php } ?>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="contact-right-items">
            <div class="contact-img">
              <img src="<?= base_url('public/img/contact.png') ?>" alt="img">
            </div>
            <div class="icon-items">
              <div class="icon">
                <img src="<?= base_url('assets/img/question.png') ?>" alt="img">
              </div>
              <div class="content">
                <p>Hast du eine Frage?</p>
                <p>Mo. bis Fr., 09:00 - 18:00</p>
                <h6><a href="tel:<?= WEBSITE_PHONE ?>"><?= WEBSITE_PHONE ?></a></h6>
              </div>
            </div>
            <div class="icon-items">
              <div class="icon">
                <img src="<?= base_url('assets/img/email.png') ?>" alt="img">
              </div>
              <div class="content">
                <p>Sende uns deine Frage</p>
                <h6><a href="mailto:<?= WEBSITE_EMAIL ?>" class="link"><?= WEBSITE_EMAIL ?></a></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
