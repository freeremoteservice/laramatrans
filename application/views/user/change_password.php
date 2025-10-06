<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url(<?= base_url('public/img/bg-header-banner.png') ?>);">
  <div class="container">
    <div class="page-heading">
      <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
        <li>
          <a href="<?= base_url('dashboard') ?>"> Admin </a>
        </li>
        <li>
          <i class="fas fa-chevron-right"></i>
        </li>
        <li>
          Edit
        </li>
      </ul>
      <h1 class="wow fadeInUp" data-wow-delay=".5s">Update Password</h1>
    </div>
  </div>
</div>

<!-- Contact Section Start -->
<section class="contact-section-1 fix section-padding">
  <div class="container">
    <div class="contact-wrapper-area">
      <div class="row g-4">
        <div class="contact-content">
        <div class="section-title">
            <img src="<?= base_url('assets/img/sub-icon.png') ?>" alt="icon-img" class="wow fadeInUp">
            <span class="wow fadeInUp" data-wow-delay=".2s">Update Password</span>
        </div>
        <form action="<?= 'change_password/' . $user[0]->id . '/submit'?>" id="change-password-form" method="POST"
            class="change-password-form contact-form-items mt-5 mt-md-0">
            <?php if (isset($contact_errors)) echo $contact_errors; ?>
            <?php if ($this->uri->segment(3) && $this->uri->segment(3) == 'success'): ?>
            <div class="success">Email sent!</div>
            <?php endif; ?>
            <div class="row g-4">
            <div class="col-lg-6">
                <div class="form-clt">
                    <input type="password" name="old_acc_pass" id="old_acc_pass" placeholder="Old Password">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-clt">
                    <input type="password" name="new_acc_pass" id="new_acc_pass" placeholder="New Password">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-clt">
                    <input type="password" name="new_acc_pass_confirm" id="new_acc_pass_confirm" placeholder="Confirm New Password">
                </div>
            </div>
            <div class="col-lg-6">
                <?php if(isset($success_message) && !is_null($success_message)) { ?>
                <div>
                    <span
                        class="label success"
                        style="width: 100%; line-height: 30px; margin-bottom: 15px"
                        ><i class="fa fa-check"></i>
                        <?=$success_message;?></span
                    >
                </div>
                <?php } else { ?>
                <button type="submit" class="theme-btn"> Update </button>
                <?php } ?>
            </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
