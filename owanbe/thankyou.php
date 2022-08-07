
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Owanbe Mart</title>

    <link href="//fonts.googleapis.com/css2?family=Prompt:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="style-starter.css">
    <link rel="icon" type="icon" href="images/icon.png">

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DZDKR086JT"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DZDKR086JT');
</script>


  </head>
  <body>
  <?php

include('header.php');

?>

<section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active">/ Contact Us</li>
      </ul>
    </div>
  </section>
<!-- contact -->
    <section class="w3l-contacts-12" id="contact">
        <div class="contact-top pt-5">
            <div class="container py-lg-4">
                <div class="title-heading-w3 text-center mx-auto">
                    <h3 class="title-big">Get In Touch</h3>
                </div>
                <div class="d-grid cont-main-top mt-lg-5 mt-4">
                    <!-- contact form -->
                    <div class="contacts12-main">
                        <div class="alert alert-success">
                            Thank you for filling this form. <br>
                            One of our representatives would call you shortly.
                        </div>
                        <form action="proc-contact.php" method="post" class="main-input">
                            <div class="top-inputs d-grid">
                                <input type="text" placeholder="Name" name="name" id="w3lName" required="">
                                <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                            </div>
                            <input type="text" placeholder="Phone Number" name="phone" id="w3lName" required="">
                            <textarea placeholder="Message" name="message" id="w3lMessage" required=""></textarea>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-style">Submit Now</button>
                            </div>
                        </form>
                    </div>
                    <!-- //contact form -->
                    <!-- contact address -->
                    <div class="contact">
                        <div class="cont-subs">
                            <div class="cont-add">
                                <h4>Location:</h4>
                                <p class="contact-text-sub">(Yellow Canopy) Waterfront, Wole Olateju Street, Opposite Akin Leigh Street,
                                  Lekki Phase 1.</p>
                            </div>
                            <div class="cont-add">
                                <h4>Email Address:</h4>
                                <a href="mailto:info@example.com">
                                    <p class="contact-text-sub">info@owanbemart.com</p>
                                </a>
                            </div>
                            <div class="cont-add">
                                <h4>Phone Number:</h4>
                                <a href="tel:+1(21) 234 4567"><p class="contact-text-sub">07052113552</p>
                                </a>
                            </div>
                            <div class="social-icons-con">
                                <h4 class="mb-3">Connect with us:</h4>
                                <a href="#facebook"><span class="fa fa-facebook-square" aria-hidden="true"></span></a>
                                <a href="#twitter"><span class="fa fa-twitter-square" aria-hidden="true"></span></a>
                                <a href="#instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                                <a href="#linkedin"><span class="fa fa-linkedin-square" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- //contact address -->
                </div>
            </div>
            <!-- map -->
            <div class="map">

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.597656870571!2d3.452701513757768!3d6.445674395336757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4f96fde40d9%3A0xfec823a18d43436e!2sAkin%20Leigh%20Cres%2C%20Lekki%20Phase%20I%20106104%2C%20Lekki!5e0!3m2!1sen!2sng!4v1629109090586!5m2!1sen!2sng"  frameborder="0"  style="border:0;" allowfullscreen="" ></iframe>


            </div>
            <!-- //map -->
        </div>
    </section>
    <!-- //contact -->


    <?php

include('footer.php');

?>

<!--  javascripts file here -->
<script src="js/jquery-3.3.1.min.js"></script>

<script src="js/theme-change.js"></script> <!-- //light and dark mode switch js -->

<script src="js/jquery-1.9.1.min.js"></script>
<!-- faq -->
<script>
  const items = document.querySelectorAll(".accordion button");

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
    }
  }

  items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
<!-- //faq -->

<script src="js/easyResponsiveTabs.js"></script>
<!--Plug-in Initialisation-->
<script type="text/javascript">
  $(document).ready(function () {
    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
      type: 'default', //Types: default, vertical, accordion
      width: 'auto', //auto or any width like 600px
      fit: true, // 100% fit in a container
      tabidentify: 'hor_1', // The tab groups identifier
      activate: function (event) { // Callback function if tab is switched
        var $tab = $(this);
        var $info = $('#nested-tabInfo');
        var $name = $('span', $info);
        $name.text($tab.text());
        $info.show();
      }
    });
  });
</script>

<!-- owl carousel -->
<script src="js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- owl carousel -->


<!-- script for customers -->
<script>
  $(document).ready(function () {
    $('.owl-three').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 3,
          nav: true
        },
        480: {
          items: 3,
          nav: true
        },
        667: {
          items: 3,
          nav: true
        },
        800: {
          items: 4,
          nav: true
        },
        1000: {
          items: 5,
          nav: true
        }
      }
    })
  })
</script>
<!-- //customers owlcarousel -->

<!-- disable body scroll which navbar is in active -->
<!-- <script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script> -->
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script><!-- //bootstrap js -->

</body>

</html>