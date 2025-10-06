<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pixydrops">
    <!-- ======== Page title ============ -->
    <title> <?= WEBSITE_NAME ?></title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="<?= base_url('assets/img/new_logo.png') ?>">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.css') ?>">
    <!--<< DatePicker.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/datepickerboot.css') ?>">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">

    <?php echo (isset($css) ? $css   : '')?>
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">



    <!-- CSS for admin dashboard -->
    <link rel="stylesheet" href="<?= base_url('public/plugins/nice-select/css/nice-select.css') ?>" />
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('public/css/app.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('public/css/dashboard/style.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('public/css/dashboard/track.css') ?>" />
    <!-- custom css -->
    <!-- <link rel="stylesheet" href="<?= base_url('public/css/custom.css') ?>" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
  </head>

  <body>

    <!-- Back To Top Start -->
    <div class="scroll-up">
      <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
      <div class="container-fluid">
        <div class="mega-menu-wrapper">
          <div class="header-main">
            <div class="header-left">
              <div class="logo">
                <a href="<?= base_url() ?>" class="header-logo">
                  <img src="<?= base_url('public/img/logo.png') ?>" alt="logo-img">
                </a>
              </div>
              <div class="mean__menu-wrapper">
                <div class="main-menu">
                  <nav id="mobile-menu">
                    <ul>
                      <li>
                        <a href="<?= base_url() ?>"><?= $link['home'] ?></a>
                      </li>
                      <?php if ($this->session->userdata('status') == 'logged_in') : ?>
                      <li class="has-dropdown active menu-thumb">
                        <a href="index.php">
                          <?=$link['admin']?>
                          <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="submenu">
                          <li><a href="<?= base_url('dashboard') ?>"><?=$link['dashboard']?></a></li>
                          <li><a href="<?= base_url('edit/' . $this->session->userdata('id')) ?>"><?=$link['edit_account']?></a></li>
                          <li><a href="<?= base_url('change_password/' . $this->session->userdata('id')) ?>"><?=$link['change_pwd']?></a></li>
                          <li><a href="<?= base_url('new') ?>"><?=$link['new_transaction']?></a></li>
                          <li><a href="<?= base_url('action/logout_account') ?>"><?=$link['log_out']?></a></li>
                        </ul>
                      </li>
                      <?php endif; ?>
                      <li>
                        <a href="<?= base_url('site/services') ?>"><?= $link['services'] ?></a>
                      </li>
                      <li>
                        <a href="<?= base_url('site/howitworks') ?>"><?= $link['how_it_works'] ?></a>
                      </li>
                      <li>
                        <a href="<?= base_url('site/contact')?>"><?= $link['contact'] ?></a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="header-right d-flex justify-content-end align-items-center">
              <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
      <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
          <div class="offcanvas__content">
            <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
              <div class="offcanvas__logo">
                  <a href="index.php">
                      <img src="<?= base_url('public/img/logo.png') ?>" alt="logo-img">
                  </a>
              </div>
              <div class="offcanvas__close">
                  <button>
                      <i class="fas fa-times"></i>
                  </button>
              </div>
            </div>
            <p class="text d-none d-xl-block">
                Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
            </p>
            <div class="mobile-menu fix mb-3"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Search Area Start -->
    <div class="search-wrap">
      <div class="search-inner">
        <i class="fas fa-times search-close" id="search-close"></i>
        <div class="search-cell">
          <form method="get">
            <div class="search-field-holder">
              <input type="search" class="main-search-input" placeholder="Search...">
            </div>
          </form>
        </div>
      </div>
    </div>

