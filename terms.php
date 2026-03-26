<?php
    include('init.php');
    $page_name = 'Terms and Conditions';
    $page_parent = '';
    $page_title = 'Terms and Conditions - '.$settings->siteTitle;
    $page_description = $settings->siteTitle . ' - Terms and Conditions for investing in medical equipment supply contracts. Please read carefully before registering and investing.';
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
            <h2 class="page-title">Terms and Conditions</h2>
            <ul class="page-breadcrumb">
              <li><a href="<?= $baseurl; ?>">Home</a></li>
              <li>Terms and Conditions</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <!-- terms section start -->
    <section class="about-section pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="about-content">
                <h4>Please read the following Terms and Conditions carefully before registering or investing.</h4><br/>
                
                <p class="pb-10">By using <?= $settings->siteTitle ?>, you confirm that you are at least 18 years of age or of legal age in your country of residence, whichever is higher.</p>
                
                <p class="pb-10"><?= $settings->siteTitle ?> is a private investment platform that connects qualified investors with verified contractors who have been awarded contracts to supply medical equipment to hospitals. All investments are considered private transactions between the platform and its members.</p>
                
                <p class="pb-10">Investments on <?= $settings->siteTitle ?> involve funding real medical equipment supply contracts. Your capital is used to enable contractors to deliver life-saving healthcare equipment to hospitals. Returns are generated from the interest paid by contractors upon successful completion and repayment of the contract.</p>
                
                <p class="pb-10">You agree that all information, communications, and materials from <?= $settings->siteTitle ?> are confidential and intended solely for registered members. You must not share, distribute, or disclose any details of investments, contracts, or platform operations without prior written consent.</p>
                
                <p class="pb-10">We are not a bank, nor are we FDIC insured or regulated as a financial institution. All investments carry risk. Past performance is not a guarantee of future results. You are investing at your own risk and you should only invest funds you can afford to risk.</p>
                
                <p class="pb-10">All personal and financial data provided to <?= $settings->siteTitle ?> will be kept strictly private and confidential. We implement reasonable security measures to protect your information, but we are not liable for any unauthorized access or data breach resulting from circumstances beyond our reasonable control.</p>
                
                <p class="pb-10">You agree to hold <?= $settings->siteTitle ?>, its owners, directors, and staff harmless from any liability arising from your participation, including but not limited to investment losses, contract delays, or hospital supply issues.</p>
                
                <p class="pb-10">We reserve the right to modify these Terms and Conditions, investment plans, fees, or platform rules at any time without prior notice. It is your responsibility to regularly review the current Terms and Conditions.</p>
                
                <p class="pb-10"><?= $settings->siteTitle ?> reserves the right to accept or reject any registration or investment application without providing a reason.</p>
                
                <p class="pb-10">You agree not to use the platform for any illegal activities, money laundering, or fraudulent purposes. You must comply with all applicable local, national, and international laws regarding investments and financial transactions.</p>
                
                <p class="pb-10">Spam, unsolicited commercial emails (UCE), or negative public reviews without first attempting to resolve issues directly with our support team are strictly prohibited. Violators may be permanently banned from the platform.</p>
                
                <p class="pb-10">By registering and investing on <?= $settings->siteTitle ?>, you acknowledge that your funds are being used to support legitimate medical equipment supply contracts for hospitals, with the dual goal of generating returns for investors and contributing to better healthcare outcomes.</p>
                
                <p><strong>If you do not agree with any part of these Terms and Conditions, please do not register or invest on this platform.</strong></p>
            </div><!-- about-content end -->
          </div>
        </div>
      </div>
    </section>
    <!-- terms section end -->
   
    <!-- footer section start -->
    <?php include('inc/footer.php') ?>
    <!-- footer section end -->
  </div> <!-- page-wrapper end -->
  
  <?php include('inc/scripts.php') ?>
</body>
</html>
