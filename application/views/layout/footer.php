<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */

?>

    <!-- Footer Section Start -->
    <footer class="footer-section fix">
      <div class="container">
        <div class="footer-widgets-wrapper">
          <div class="row justify-content-between">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
              <div class="single-footer-widget shape-map">
                <div class="footer-content">
                  <p>
                    <?= WEBSITE_NAME ?>
                  </p>
                  <ul class="contact-info">
                    <li>
                      <i class="fa-regular fa-envelope"></i>
                      <a href="mailto:<?= WEBSITE_EMAIL ?>"><?= WEBSITE_EMAIL ?></a>
                    </li>
                    <li>
                      <i class="fa-solid fa-phone-volume"></i>
                      <a href="tel:+4932212243833"><?= WEBSITE_PHONE ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
              <div class="single-footer-widget">
                <ul class="list-items">
                  <li>
                    <a href="<?= base_url('site/contact') ?>">
                      Kontaktieren Sie uns
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url('site/services') ?>">
                      Dienstleistungen
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url('site/howitworks') ?>">
                      Wie es funktioniert
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url('site/terms_and_conditions') ?>">
                      Allgemeine Geschäftsbedingungen
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url('site/privacy_policy') ?>">
                      Datenschutz
                    </a>
                  </li>
                  <li>
                    <a href="<?= base_url('site/legal_info') ?>">
                      Impressum
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="single-footer-widget">
                    <div class="footer-gallery">
                        <div class="gallery-wrap">
                            <div class="gallery-item">
                                <div class="thumb">
                                    <a href="<?= base_url('public/img/footer/1.png') ?>" class="img-popup">
                                        <img src="<?= base_url('public/img/footer/1.png') ?>" alt="gallery-img">
                                        <div class="icon">
                                            <i class="far fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="<?= base_url('public/img/footer/2.jpg') ?>" class="img-popup">
                                        <img src="<?= base_url('public/img/footer/2.jpg') ?>" alt="gallery-img">
                                        <div class="icon">
                                            <i class="far fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="<?= base_url('public/img/footer/3.jpg') ?>" class="img-popup">
                                        <img src="<?= base_url('public/img/footer/3.jpg') ?>" alt="gallery-img">
                                        <div class="icon">
                                            <i class="far fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="gallery-item">
                                <div class="thumb">
                                    <a href="<?= base_url('public/img/footer/4.jpg') ?>" class="img-popup">
                                        <img src="<?= base_url('public/img/footer/4.jpg') ?>" alt="gallery-img">
                                        <div class="icon">
                                            <i class="far fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="<?= base_url('public/img/footer/5.jpg') ?>" class="img-popup">
                                        <img src="<?= base_url('public/img/footer/5.jpg') ?>" alt="gallery-img">
                                        <div class="icon">
                                            <i class="far fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="<?= base_url('public/img/footer/6.jpg') ?>" class="img-popup">
                                        <img src="<?= base_url('public/img/footer/6.jpg') ?>" alt="gallery-img">
                                        <div class="icon">
                                            <i class="far fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="single-footer-widget">
                    <div class="footer-content">
                        <p>Abonnieren Sie unseren Newsletter, um aktuelle Informationen und Neuigkeiten zu erhalten.</p>
                        <div class="footer-input">
                            <input type="email" id="email2" placeholder="Email address">
                            <button class="newsletter-btn" type="submit">
                                <i class="fa-regular fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-wrapper">
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  <?= WEBSITE_NAME ?> 2025 • Alle Rechte vorbehalten
                </p>
            </div>
        </div>
      </div>
    </footer>

    <!--<< All JS Plugins >>-->
    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <!--<< Viewport Js >>-->
    <script src="<?= base_url('assets/js/viewport.jquery.js') ?>"></script>
    <!--<< Bootstrap Js >>-->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
    <!--<< Nice Select Js >>-->
    <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <!--<< Waypoints Js >>-->
    <script src="<?= base_url('assets/js/jquery.waypoints.js') ?>"></script>
    <!--<< Counterup Js >>-->
    <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
    <!--<< Datepicker Js >>-->
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
    <!--<< MeanMenu Js >>-->
    <script src="<?= base_url('assets/js/jquery.meanmenu.min.js') ?>"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
    <!--<< GSAP Animation Js >>-->
    <script src="<?= base_url('assets/js/animation.js') ?>"></script>
    <!--<< Wow Animation Js >>-->
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    
    <?php echo (isset($script) ? $script   : '')?>
    <!--<< Main.js >>-->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>




    <script src="<?= base_url('public/plugins/nice-select/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('public/js/mail-script.js') ?>"></script>
    <script src="<?= base_url('public/js/custom.js') ?>"></script>




    <script type="text/javascript"> 
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- Flag click handler -->
    <script type="text/javascript">
      $('ul.select-lang li span.change-country').click(function() {
        var lang = $(this).data('lang');
        console.log("lang", lang);
        var frame = $('.goog-te-menu-frame:first');
        if (frame.length != 1) {
          alert("Error: Could not find Google translate frame.");
          return false;
        }
        frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
        return false;
      });
    </script>
    <script type="text/javascript">
      function defer(method) {
        if (window.jQuery)
          method();
        else
          setTimeout(function() {
            defer(method)
          }, 50);
      }

      defer(function() {
        (function($) {
          function doneResizing() {
            var totalScroll = $('.resource-slider-frame').scrollLeft();
            var itemWidth = $('.resource-slider-item').width();
            var difference = totalScroll % itemWidth;
            if ( difference !== 0 ) {
              $('.resource-slider-frame').animate({
                scrollLeft: '-=' + difference
              }, 500, function() {
                // check arrows
                checkArrows();
              });
            }
          }
          
          function checkArrows() {
            var totalWidth = $('#resource-slider .resource-slider-item').length * $('.resource-slider-item').width();
            var frameWidth = $('.resource-slider-frame').width();
            var itemWidth = $('.resource-slider-item').width();
            var totalScroll = $('.resource-slider-frame').scrollLeft();
            
            if ( ((totalWidth - frameWidth) - totalScroll) < itemWidth ) {
              $(".next").css("visibility", "hidden");
            }
            else {
              $(".next").css("visibility", "visible");
            }
            if ( totalScroll < itemWidth ) {
              $(".prev").css("visibility", "hidden");
            }
            else {
              $(".prev").css("visibility", "visible");
            }
          }
          
          $('.arrow').on('click', function() {
            var $this = $(this),
              width = $('.resource-slider-item').width(),
              speed = 500;
            if ($this.hasClass('prev')) {
              $('.resource-slider-frame').animate({
                scrollLeft: '-=' + width
              }, speed, function() {
                // check arrows
                checkArrows();
              });
            } else if ($this.hasClass('next')) {
              $('.resource-slider-frame').animate({
                scrollLeft: '+=' + width
              }, speed, function() {
                // check arrows
                checkArrows();
              });
            }
          }); // end on arrow click
          
          $(window).on("load resize", function() {
            checkArrows();
            $('#resource-slider .resource-slider-item').each(function(i) {
              var $this = $(this),
                left = $this.width() * i;
              $this.css({
                left: left
              })
            }); // end each
          }); // end window resize/load
          
          var resizeId;
          $(window).resize(function() {
              clearTimeout(resizeId);
              resizeId = setTimeout(doneResizing, 500);
          });
        })(jQuery); // end function
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"> </script>
    <script type="text/javascript">
      function add_chatinline() {
        var hccid=25710785;
        var nt=document.createElement("script");
        nt.async=true;
        nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;
        var ct=document.getElementsByTagName("script")[0];
        ct.parentNode.insertBefore(nt,ct);
      }
      
      add_chatinline();
    </script>

</body>

</html>