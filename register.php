<?php
    include('init.php');
    if(isset($_SESSION['user'])){
        header('location: account/dashboard.php');
    }
    $page_name = 'Register';
    $page_parent = 'Account';
    $page_title = 'Create Account - '.$settings->siteTitle;
    $page_description = $settings->siteTitle . ' - Register now to start investing in medical equipment supply contracts for hospitals. Help save lives while earning attractive profits.';
    include('inc/head.php');

    if (isset($_GET["referral"]) && !empty(trim($_GET["referral"]))) {
        $referral = $_GET["referral"];
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS num_of_referrals FROM users WHERE referral_code = ?");
        $stmt->execute([$referral]);
        $prow = $stmt->fetch();
        $num_of_referrals = $prow['num_of_referrals'] ?? 0;

        if ($num_of_referrals >= 2) {
            $ref_sentence = 'Already referred '.$num_of_referrals.' other users';
        } elseif ($num_of_referrals == 1) {
            $ref_sentence = 'Referred '.$num_of_referrals.' other user';
        } else {
            $ref_sentence = 'You are the first to be referred by this user';
        }
    }
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

        <!-- account section start -->
        <div class="account-section bg_img" data-background="assets/images/bg/bg-5.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one" data-background="assets/images/bg/bg-6.jpg">
                                <h2 class="section-title">Join <?= $settings->siteTitle ?></h2>
                                <p>Create your account and start investing in life-saving medical equipment</p>
                                
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
                                <h3 class="text-center">Create New Account</h3>
                                <form class="mt-4" method="post" action="register_helper.php">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" placeholder="Enter your full name" name="full_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Choose a username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter your email address" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Create a strong password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Re-enter your password" name="repassword" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Referral Code (Optional)</label>
                                        <input type="text" 
                                               class="form-control" 
                                               placeholder="Enter referral code if you have one" 
                                               <?= isset($referral) ? "readonly" : ""; ?> 
                                               name="referral" 
                                               value="<?= isset($referral) ? htmlspecialchars($referral) : '' ?>">
                                        <?= isset($referral) ? '<p class="f-size-14 text-success mt-1">'.$ref_sentence.'</p>' : '' ?>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                <label class="form-check-label" for="exampleCheck1">
                                                    I accept the <a href="terms" class="base--color">Terms & Conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-right">
                                            <p class="f-size-14">Already have an account? 
                                                <a href="login" class="base--color">Login</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" name="signup" class="cmn-btn btn-block">Create Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account section end -->

        <!-- footer section start -->
        <?php include('inc/footer.php'); ?>
        <!-- footer section end -->
    </div> <!-- page-wrapper end -->
    
    <?php include('inc/scripts.php'); ?>
</body>
</html>
