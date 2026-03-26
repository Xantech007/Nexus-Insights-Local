<?php
    include('init.php');
    include 'admin/session.php';
    if(isset($_SESSION['user'])){
        header('location: account/dashboard.php');
    }
    $page_name = 'Password Reset';
    $page_parent = '';
    $page_title = 'Set New Password - '.$settings->siteTitle;
    $page_description = $settings->siteTitle . ' - Create a new password for your account to continue investing in medical equipment supply contracts and earn profits while saving lives.';
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
        <!-- account section start -->
        <div class="account-section bg_img" data-background="assets/images/bg/bg-5.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" data-background="assets/images/bg/bg-6.jpg">
                                <h2 class="section-title">Set New Password</h2>
                                <p>Enter your new password for <?= $settings->siteTitle ?></p>
                                
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
                                <form class="mt-4" method="post" action="password_new.php?code=<?php echo htmlspecialchars($_GET['code'] ?? ''); ?>&user=<?php echo htmlspecialchars($_GET['user'] ?? ''); ?>">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" placeholder="Enter new password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input type="password" class="form-control" placeholder="Re-enter new password" name="repassword" required>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" name="reset" class="cmn-btn btn-block">Update Password</button>
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
    </div> <!-- page-wrapper end -->
    
    <?php include('inc/scripts.php') ?>
</body>
</html>
