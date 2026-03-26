<?php
    include('init.php');
    include('admin/includes/format.php');
    $page_name = 'Contact Us';
    $page_parent = '';
    $page_title = 'Contact Us - '.$settings->siteTitle;
    $page_description = $settings->siteTitle . ' helps investors fund medical equipment supply contracts to hospitals. Get in touch with us for any inquiries about investing in life-saving healthcare equipment and earning profits.';
    include('inc/head.php');
?>
<body>
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
            <h2 class="page-title">Contact Us</h2>
            <ul class="page-breadcrumb">
              <li><a href="<?= $baseurl ?>">Home</a></li>
              <li>Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <!-- contact section start -->
    <section class="pt-120 pb-120 bg_img" data-background="assets/images/bg/bg-2.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="section-header text-center mb-5">
              <h2 class="section-title"><span class="font-weight-normal">Get In Touch</span> <b class="base--color">With Us</b></h2>
              <p class="mt-3">Have questions about investing in medical equipment supply contracts? We're here to help you save lives and generate profits.</p>
            </div>
            
            <div class="row mb-none-30">
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item text-center">
                  <i class="fas fa-phone-alt base--color"></i>
                  <h5 class="mt-4">WhatsApp Us</h5>
                  <div class="mt-4">
                    <p class="font-size-18"><?= $settings->phoneNumber; ?></p>
                    <p class="text-muted">Fast response for investment inquiries</p>
                  </div>
                </div><!-- contact-item end -->
              </div>
              
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item text-center">
                  <i class="fas fa-envelope base--color"></i>
                  <h5 class="mt-4">Mail Us</h5>
                  <div class="mt-4">
                    <p><?= $settings->email2; ?></p>
                    <p class="text-muted">We'll respond within 24 hours</p>
                  </div>
                </div><!-- contact-item end -->
              </div>
              
              <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item text-center">
                  <i class="fas fa-map-marker-alt base--color"></i>
                  <h5 class="mt-4">Visit Us</h5>
                  <div class="mt-4">
                    <p><?= $settings->address; ?></p>
                    <p class="text-muted">Our support team is ready to assist</p>
                  </div>
                </div><!-- contact-item end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact section end -->
   
    <!-- footer section start -->
    <?php include('inc/footer.php') ?>
    <!-- footer section end -->
  </div> <!-- page-wrapper end -->
  
  <?php include('inc/scripts.php') ?>
</body>
</html>
