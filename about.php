<?php
    include('init.php');
    include('admin/includes/format.php');
    $page_name = 'About Us';
    $page_parent = '';
    $page_title = 'About Us - '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' helps investors fund medical equipment supply contracts to hospitals. Your investment enables contractors to deliver life-saving healthcare equipment. At the end of the contract, contractors repay the loan with interest, which becomes your profit. Invest with us to save lives and generate income!';
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
    <!-- header-section start -->
    <?php include('inc/header.php'); ?>
    <!-- header-section end -->
   
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
              <h2 class="section-title"><span class="font-weight-normal">How</span> <b class="base--color">Our Platform</b> <span class="font-weight-normal">Works</span></h2>
              <p>Invest in medical equipment supply contracts and earn attractive returns while helping save lives.</p>
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
                <p class="mt-2">Sign up and become part of our investor community.</p>
              </div>
            </div><!-- work-card end -->
          </div>
          <div class="col-lg-4 col-md-6 work-item mb-30">
            <div class="work-card text-center">
              <div class="work-card__icon">
                <i class="las la-hand-holding-usd base--color"></i>
                <span class="step-number">02</span>
              </div>
              <div class="work-card__content">
                <h4 class="base--color mb-3">Fund a Contract</h4>
                <p class="mt-2">Choose an investment plan and provide capital to support hospital medical equipment supply.</p>
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
                <h4 class="base--color mb-3">Receive Repayment + Profit</h4>
                <p class="mt-2">When the contractor completes delivery, they repay the loan with interest. You get your capital back plus profit.</p>
              </div>
            </div><!-- work-card end -->
          </div>
        </div>
      </div>
    </section>
    <!-- how work section end -->

    <!-- about section start -->
    <section class="about-section pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <div class="about-content">
              <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b class="base--color">Us</b></h2>
              
              <p>We are a specialized investment platform that connects ethical investors with real medical equipment supply contracts awarded to contractors for hospitals.</p>
              
              <p class="mt-4">The money you invest goes directly to qualified contractors who have secured contracts to supply essential healthcare equipment to hospitals. This financial facilitation enables them to successfully procure, deliver, and install life-saving medical devices and equipment.</p>
              
              <p class="mt-4">At the end of the contract period, the contractors repay the full loan amount together with interest. This interest serves as the profit distributed to our investors. Our model creates a powerful win-win situation: investors earn competitive returns while contributing to improved healthcare infrastructure that saves lives.</p>
              
              <p class="mt-4">We are committed to transparency, due diligence, and creating sustainable impact. Every investment on our platform supports the delivery of critical medical equipment to hospitals, helping bridge healthcare gaps while generating reliable income for our investors.</p>
              
              <p class="mt-4"><strong>Invest with us to save lives and make profits.</strong></p>
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
