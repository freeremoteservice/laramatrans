<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Tracking Section Start -->
<section class="track-section fix section-padding">
  <div class="container">
    <div class="contact-wrapper-area">
      <div class="row g-4">
        <div class="contact-content">
          <div class="section-title">
            <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp">
            <span class="wow fadeInUp" data-wow-delay=".2s">Ihre Transaktions-ID</span>
          </div>
          <form action="<?= base_url('track/submit') ?>" id="tracking-form" method="POST"
              class="tracking-form mt-5 mt-md-0">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="form-clt">
                    <input type="text" name="tracking" id="tracking" class="form-control" placeholder="Beispiel: AB12345" required />
                </div>
              </div>
              <div class="col-lg-12" style="text-align: center">
                <button type="submit" class="theme-btn">
                    Suchen
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tracking Section End -->
