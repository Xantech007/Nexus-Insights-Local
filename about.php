<?php
    include('init.php');
    include('admin/includes/format.php');

    $page_name = 'About Us';
    $page_parent = '';
    $page_title = 'Welcome to the Official Website of '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' provides sustainable, technology-driven agricultural investment opportunities backed by modern farming infrastructure and expert agronomy. Choose a plan to grow your wealth today! Together We Cultivate the Future!...';
    include('inc/head.php');
?>
<body>
  <!--========== Preloader ==========-->
  
  <!--========== Preloader ==========-->

  <!-- scroll-to-top start -->
  <?php include('inc/scroll-to-top.php'); ?>  
  <!-- scroll-to-top end -->

  <!-- STAR ANIMATION -->
  <?php include('inc/star-animation.php'); ?>
  <!-- / STAR ANIMATION -->

  <div class="page-wrapper">
    <!-- header-section start  -->
    <?php include('inc/header.php'); ?>    
    <!-- header-section end  -->
    
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">About Us</h2>
            <ul class="page-breadcrumb">
              <li><a href="<?= $baseurl; ?>">Home</a></li>
              <li>About</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <!-- how work section start -->
    <section class="pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-5.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">How</span> <b class="base--color">Nexus Agro</b> <span class="font-weight-normal">Works</span></h2>
              <p>Join our sustainable agricultural platform and invest in real farming projects. Watch your investment grow with every harvest cycle.</p>
            </div>
          </div>
        </div><!-- row end -->
        <div class="row justify-content-center mb-none-30">
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="las la-user base--color"></i>
                <span class="step-number">01</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Create Account</h4>
              </div>
            </div><!-- work-card end -->
          </div>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="las la-seedling base--color"></i>
                <span class="step-number">02</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Invest in Farm Plan</h4>
              </div>
            </div><!-- work-card end -->
          </div>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="las la-wallet base--color"></i>
                <span class="step-number">03</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Harvest Profit</h4>
              </div>
            </div><!-- work-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- how work section end  -->

    <!-- about section start -->
    <section class="about-section pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b class="base--color">Us</b></h2>
              <p>Nexus Agro is an international agricultural investment company dedicated to sustainable farming, crop production, and modern agribusiness operations managed by qualified agronomists, farm engineers, and sustainability experts.</p>
              <p class="mt-4">Our mission is to provide investors with a reliable, transparent, and high-yield source of income through real agricultural projects, while minimizing environmental impact and promoting food security. We streamline the connection between capital and cultivation, ensuring efficient farm-to-profit operations.</p>
              <p class="mt-4">We are your lifelong partner in agricultural wealth creation. With decades of combined expertise in precision farming, soil health, and supply chain optimization, we’ve built a trusted reputation as a leader in agro-investment and sustainable land development.</p>
            </div><!-- about-content end -->
          </div>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- team section start -->
    <?php include('inc/team.php') ?>
    <!-- team section end -->
    
    <!-- footer section start -->
    <?php include('inc/footer.php') ?>
    <!-- footer section end -->
  </div> <!-- page-wrapper end -->
  <?php include('inc/scripts.php') ?>
</body>
</html>
