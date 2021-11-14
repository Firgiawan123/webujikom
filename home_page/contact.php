<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>E-JOBS - Contact Page</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>
<!--
Parallo Template
https://templatemo.com/tm-534-parallo
-->

<body id="servicesPage">
  <div class="parallax-window" data-parallax="scroll" data-image-src="img/bg-01.jpg">
    <div class="container-fluid">
      <div class="row tm-brand-row">
        <div class="col-lg-4 col-11">
          <div class="tm-brand-container tm-bg-transparent">
            <i class="fab fa-css3 tm-brand-icon" style="color: black; background-color: white;"></i>
            <div class="tm-brand-texts">
              <h1 class="text-uppercase tm-brand-name" style="color: white;">E-JOBS</h1>
              <hr class="tm-home-hr" />
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-1">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item green-highlight active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>

      <!-- Testimonials header -->
      <section class="row" id="tmServices">
        <div class="col-12">
          <div class="parallax-window tm-services-parallax-header tm-testimonials-parallax-header" data-parallax="scroll" data-z-index="101" data-image-src="img/people.jpg">

            <div class="tm-bg-black-transparent text-center tm-services-header tm-testimonials-header">
              <h2 class="text-uppercase tm-services-page-title tm-testimonials-page-title">Contact</h2>
              <p class="tm-services-description mb-0 small">
                Parallax movement background page "people" for contact page
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="row tm-contact-row">
        <div class="col-lg-6 tm-contact-col-left">
          <form action="#" method="POST" id="tmContactForm" class="tm-bg-black-transparent tm-contact-form">
            <div class="form-group">
              <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Name" required="">
            </div>
            <div class="form-group">
              <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Email" required="">
            </div>
            <div class="form-group">
              <textarea rows="6" id="contact_message" name="contact_message" class="form-control rounded-0 border-top-0 border-right-0 border-left-0" placeholder="Message" required=""></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary tm-btn-submit rounded-0">
                Submit
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-6 tm-contact-col-right">
          <div class="tm-bg-black-transparent tm-contact-text">

            <i class="mx-auto mb-5 fas fa-3x fa-address-card tm-app-feature-icon"></i>

            <h3 class="tm-service-tab-title">CONTACT INFO</h3>
            <p class="mb-0">
            <div class="col span_6 contact_column">
              <span><i class="fa fa-map-marker"></i>Dusun Pasirtalaga No II RT/RW 010/ 003</span>
              </p>
              <p class="mb-0">
                <span><i class="fa fa-phone"></i>0281 1203 1124, (022) 8681 1715</span>
              </p>
              <br>
              <p class="mb-0">
                <span><i class="fa fa-envelope"></i>info@cgy.co.id</span>
              </p>
              <br>

              <h6>Social Network</h6>

              <div class="social_icons">
                <a class="fa fa-twitter" href="https://twitter.com/"></a>

                <a class="fa fa-facebook" href="https://www.facebook.com/"></a>

                <a class="fa fa-google-plus" href="https://plus.google.com/"></a>

              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Call to Action -->


      <!-- Page footer -->
      <footer class="row">
        <p class="col-12 text-white text-center tm-copyright-text">
          Copyright &copy; 2021 By E-JOBS.

        </p>
      </footer>
    </div>
    <!-- .container-fluid -->
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script>
    $(function() {
      $('.tabgroup > div').hide();
      $('.tabgroup > div:first-of-type').show();
      $('.tabs a').click(function(e) {
        e.preventDefault();
        var $this = $(this),
          tabgroup = '#' + $this.parents('.tabs').data('tabgroup'),
          others = $this.closest('li').siblings().children('a'),
          target = $this.attr('href');
        others.removeClass('active');
        $this.addClass('active');
        $(tabgroup).children('div').hide();
        $(target).show();

        // Scroll to tab content (for mobile)
        if ($(window).width() < 992) {
          $('html, body').animate({
            scrollTop: $("#first-tab-group").offset().top
          }, 200);
        }
      })

      $('.tm-carousel').slick({
        dots: true,
        infinite: false,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [{
            breakpoint: 1024,
            settings: {
              arrows: false,
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
</body>

</html>