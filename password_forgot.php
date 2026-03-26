<?php
    include('init.php');
    if(isset($_SESSION['user'])){
        header('location: account/dashboard.php');
    }
    $page_name = 'Password Reset';
    $page_parent = 'Account';
    $page_title = 'Reset Password - '.$settings->siteTitle;
    $page_description = $settings->siteTitle . ' - Forgot your password? Enter your email to reset it and continue investing in medical equipment supply contracts for hospitals.';
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
        <?php include('inc/header.php') ?>

        <!-- account section start -->
        <div class="account-section bg_img" data-background="assets/images/bg/bg-5.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" data-background="assets/images/bg/bg-6.jpg">
                                <h2 class="section-title">Reset Your Password</h2>
                                <p>Enter the email associated with your <?= $settings->siteTitle ?> account</p>
                                
                                <?php
                                    if(isset($_SESSION['error'])){
                                        echo "
                                            <div class='callout callout-danger text-center'>
                                                <p>".$_SESSION['error']."</p>
                                            </div>
                                        ";
                                        unset($_SESSION['error']);
                                    }
                                    if(isset($_SESSION['success'])){
                                        echo "
                                            <div class='callout callout-success text-center'>
                                                <p>".$_SESSION['success']."</p>
                                            </div>
                                        ";
                                        unset($_SESSION['success']);
                                    }
                                ?>
                            </div>
                            <div class="account-card__body">
                                <form class="mt-4" method="post" action="reset.php">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter your registered email" name="email" required>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" name="reset" class="cmn-btn btn-block">Send Reset Link</button>
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col-sm-6 text-sm-left">
                                            <p class="f-size-14">Don't have an account? 
                                                <a href="register" class="base--color">Sign Up</a>
                                            </p>
                                        </div>
                                        <div class="col-sm-6 text-sm-right">
                                            <p class="f-size-14">Remember your password? 
                                                <a href="login" class="base--color">Login Here</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account section end -->

        <?php include('inc/footer.php') ?>
    </div> <!-- page-wrapper end -->
    
    <?php include('inc/scripts.php') ?>
</body>
</html>
