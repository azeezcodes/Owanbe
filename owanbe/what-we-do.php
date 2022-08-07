
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
            <li class="active">/ Services</li>
        </ul>
    </div>
</section>

              
    <!-- //bottom-grids-->

 <section>
  <!-- <h6 class="title-small text-center">What We Do</h6> -->
  <h3 class="title-big mb-md-5 mb-4 text-center" style="margin-top: 50px;">What We Do.</h3>
     
 </section>



 <section style="margin-bottom: 40px;">
   <div class="container ">
     <div class="row">
       <div class="col-md-6 barye">
        <h5>Local Snacks & Drinks</h5>
        <p>Akara (Fried Beans Balls), Moimoi, Eko/Agidi (Cooked Corn Meal), Puffpuff, Mosa, Kokoro, Local Peanut Butter(ose oji), Yoyo (Tiny Fried Fish) Aadun, Robo (Egusi Ball), Freshly Squeezed Juice, Zobo, etc.
        </p>
       </div>
       <div class="col-md-6 mags">
         <img src="images/kara.jpg" class="img-fluid"  alt="">
       </div>
     </div>
   </div>

   <div class="container  ">
    <div class="row">


      <div class="col-md-6 mags">
        <img src="images/z7.jpg" class="img-fluid"  alt="">
      </div>
      <div class="col-md-6 barye">
       <h5>Local Fruits and Salad</h5>
       <p>Banana, Coconut, Guava, Orange, Pawpaw, Avocado (pear), Pineapple, Sugar Cane, Water Melon, Abgalumo, Bell pepper,  Cabbage, Carrot,  Cucumber, Garlic, Ginger, Green peas, Green Pepper, Lettuce, Red bell Pepper, Spring Onions, Tatase, Tomatoes, Yellow bell pepper,  etc.
        
       </p>
      </div>
     
    </div>
   </div>

   <div class="container">
    <div class="row">
      <div class="col-md-6 barye" style="margin-top: 10px; ">
       <h5>Local vegetables </h5>
       <p>Achara, Achcha (Rye), Achi, Akwu (Palm kernel), Atama,Bitter leaf ( ewuro), Corn, Curry leaves, Edita, Effirin leave (scent leaf), Efo soko, Efo tete (spinach) Egg-plant, Ewedu, Garden egg (igba), Igbo leaf, Lemon grass, Moi moi leaf, Oha, Okazi -Afang leafetc.
        
       </p>
      </div>
      <div class="col-md-6 mags">
        <img src="images/maiz.jpg" class="img-fluid"  alt="" style="height: 210px; width: 620px;">
      </div>
    </div>
  </div>

  <div class="container ">
    <div class="row">



      <div class="col-md-6 mags">
        <img src="images/k4.jpg" class="img-fluid"  alt="" style="width: 530px ;  ">
      </div>

      <div class="col-md-6 barye" style="margin-top: 10px;">
       <h5>Local Spices</h5>
       <p>Ogbono, Egusi, Dadawa (iru, locust beans), Ogiri, Uda, Kaun (potassium), Alum, Pepper Soup ingredients, Suya spices, Isan (periwinkles), etc
       </p>
      </div>
    
    </div>
  </div>

  <div class="container " >
    <div class="row">
      <div class="col-md-6 barye" style="margin-top: 8px;">
       <h5>Local Remedies</h5>
       <p style="padding-bottom: 40px; padding-top: 10px; ;">Shea butter (ori), Chewing sticks (pako), Natural Honey, Ogun efo, Adiagbon (Coconut oil), Kolanut (obi) and Bitterkola (orogbo), etc.
       </p>
      </div>
      <div class="col-md-6 mags">
        <img src="images/ori.jpg" class="img-fluid"  alt="">
      </div>
    </div>
  </div>



 </section>





<!-- <section class="w3l-bottom py-5">
    <div class="container">
        <div class="subscribe">
            <div class="row">
                <div class="col-lg-9 header-section mx-auto">
                    <h3 class="title-big mx-0 mw-100"> Work with our Classic Team </h3>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4 align-self text-lg-right">
                    <a href="#features" class="btn btn-light btn-style">Work with us</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

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