<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Solutions &amp; Business Services Responsive HTML5 Bootstrap5  Website Template">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images/fav-icon/fav-icon.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="css/vendors/animate.css">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="css/vendors/swiper-bundle.min.css">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="css/vendors/flaticon/flaticon.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="css/vendors/all.min.css">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/vendors/jquery.fancybox.min.css">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
        <link rel="stylesheet" href="css/main-LTR.css">
        <title> Qabaal |   Home-5</title>
  </head>
  <body class=" dark-theme ">
    <!--Start Page Header-->
  @include('frontend.layouts.page-header')
    <!--End Page Header-->
    <!-- Start  Page hero-->
    @include('frontend.layouts.page-hero')
    <!-- End  Page hero-->
    <!-- Start  services Section-->
    @include('frontend.layouts.services')
    <!-- End  services Section-->
    <!-- Start  about Section-->
    @include('frontend.layouts.about')
    <!-- End  about Section-->
    <!-- Start  stats Section-->
 
    @include('frontend.layouts.stats')
    <!-- End  stats Section-->
    <!-- Start  portfolio-slider Section-->
    @include('frontend.layouts.portfolio')
   
    <!-- End  portfolio-slider Section-->
    <!-- Start  our-clients Section-->
    @include('frontend.layouts.clients')
    <!-- End  our-clients Section-->
    <!-- Start  pricing Section-->
    @include('frontend.layouts.pricing')
<!-- End pricing Section--><!-- Start  testimonials-->
   @include('frontend.layouts.testimonials')
  <!-- End  testimonials-->
    <!-- Start  blog Section-->
    @include('frontend.layouts.blog')
    <!-- End  blog Section-->
     <!-- Start  page-footer Section-->
     @include('frontend.layouts.footer')
    <!-- End  page-footer Section-->
    <!-- Start loading-screen Component-->
    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div>
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Button-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Button-->
    <!-- Start privacy-policy-modal-->
    @include('frontend.layouts.privacy')
    <!-- End privacy-policy-modal-->    
        
        <!--     JQuery     -->
        <script src="js/vendors/jquery-3.6.1.min.js"></script>
        
        <!--     appear     -->
        <script src="js/vendors/appear.min.js"></script>
        
        <!--     bootstrap     -->
        <script src="js/vendors/bootstrap.bundle.min.js"></script>
        
        <!--     countTo     -->
        <script src="js/vendors/jquery.countTo.js"></script>
        
        <!--     wow     -->
        <script src="js/vendors/wow.min.js"></script>
        
        <!--     swiper     -->
        <script src="js/vendors/swiper-bundle.min.js"></script>
        
        <!--     particles     -->
        <script src="js/vendors/particles.min.js"></script>
        
        <!--     Vanilla-tilt     -->
        <script src="js/vendors/vanilla-tilt.min.js"></script>
        
        <!--     isotope     -->
        <script src="js/vendors/isotope-min.js"></script>
        
        <!--     fancybox     -->
        <script src="js/vendors/jquery.fancybox.min.js"></script>
        
        <!--     main     -->
        <script src="js/main.js"></script>
  </body>
</html>