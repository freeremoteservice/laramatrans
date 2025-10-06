<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Login Section Start -->
<section class="contact-section fix section-padding">
  <div class="container">
    <div class="contact-wrapper-area">
      <div class="row g-4">
        <div class="contact-content">
          <div class="section-title">
            <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp">
            <span class="wow fadeInUp" data-wow-delay=".2s">User Login</span>
          </div>
          <form action="<?= base_url('login/submit') ?>" id="login-form" method="POST"
              class="contact-form-items mt-5 mt-md-0">
            <div class="row g-4">
              <div class="col-lg-6">
                <div class="form-clt">
                  <input type="text" name="login_acc_email" id="login_acc_email" placeholder="Your Email">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-clt">
                  <input type="password" name="login_acc_pass" id="login_acc_pass" placeholder="Your Name">
                </div>
              </div>
              <div class="col-lg-12" style="text-align: center">
                <button type="submit" class="theme-btn">
                  Login
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Login Section End -->
 