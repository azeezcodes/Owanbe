
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

<!-- ---------------------------------------------------------- -->
<section class="w3l-breadcrumb">
  <div class="container">
    <ul class="breadcrumbs-custom-path">
      <li><a href="index.php">Home</a></li>
      <li class="active">/ About Us</li>
    </ul>
  </div>
</section>
<!-- about section -->
  <section class="w3l-text-6 py-5" id="about">
    <div class="text-6-mian py-lg-5 py-md-4">
      <div class="container">
        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-6 left-img pr-lg-4">
            <img src="images/about1.jpg" alt="" class="img-responsive radius-image img-fluid" />
          </div>
          <div class="col-lg-6 text-6-info mt-lg-0 mt-md-5 mt-4">
            <h3 class="title-big mw-100">Get To Know Us Better!</h3>
            <p class="mt-md-4 mt-3">Owanbe Mart is a marketplace with a difference!
              We provide hassle-free, high quality fresh produce to Lekki residents and its vicinity. Owanbe Mart will provide excellent opportunity for Lekki residents to shop for their farm fresh weekly groceries and other corresponding kitchen implements in a hassle free atmosphere during the weekends.
              We deliver fresh groceries to your doorstep.</p>
            <!-- <a href="#more" class="btn btn-style btn-primary mt-sm-5 mt-4">Read More</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about section -->


<section style="background-color: rgb(247, 244, 244);">
  <div class="container ourmi">
    <div class="row">
      
      <div class="col-md-5 ourmi1">
        <h2 style="color: rgb(9, 53, 9) ; padding-bottom: 30px;">Our Mission</h2>
          <p >To provide residents of the Lekki Phase 1 estate and vicinity the opportunity to shop for their weekly farm fresh groceries and kitchen implements in a hassle free atmosphere during the weekends.</p>

      </div>
      <div class="col-md-6">
        <img src="images/about2.jpg" alt="" class="img-responsive radius-image img-fluid" >
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</section>


<section style="margin-bottom: 50px;">
  <div class="comtainer coreval">
    <div class="row">
<div class="col-md-2"></div>
<div class="col-md-4">

     <h4>Our Core Values</h4>
     <p> <span class="fa fa-check"></span> Freshness</p>
     <p> <span class="fa fa-check"></span> Spectacular Customer Service</p>
     <p> <span class="fa fa-check"></span> Pleasant Shopping Experience</p>
     <p> <span class="fa fa-check"></span> Partners in Healthy Feeding</p>
     <p> <span class="fa fa-check"></span> Environmental Friendly</p>
     
    


</div>

<div class="col-md-5">

  <h4>Our Goals and Objectives</h4>
  <p> <span class="fa fa-check"></span> Provide residents with fresh and high quality groceries</p>
  <p> <span class="fa fa-check"></span> Create a pleasant grocery shopping experience for clients</p>
  <p> <span class="fa fa-check"></span> Be a one stop shop for grocery shopping.</p>
  <p> <span class="fa fa-check"></span> Bring residents of the Community together.</p>
 
</div>


    </div>
  </div>

</section>

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

<script src="js/bootstrap.min.js"></script><!-- //bootstrap js -->

</body>

</html>