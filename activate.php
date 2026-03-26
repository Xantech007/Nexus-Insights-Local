<?php
include('init.php');
if (isset($_SESSION['user'])) {
    header('location: account/dashboard.php');
}
$page_name = 'Account Activation';
$page_parent = '';
$page_title = 'Account Activation - ' . $settings->siteTitle;
$page_description = $settings->siteTitle . ' helps investors fund medical equipment supply contracts to hospitals. Activate your account to start investing in life-saving healthcare equipment and earn profits.';
include('inc/head.php');

$output = '';

if (!isset($_GET['code']) || !isset($_GET['user'])) {
    $output .= '
        <h1 class="font-size-sl-72 font-weight-light mb-3">Error!</h1>
        <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Activation code not found. Please <a href="register.php">Register</a> again.</p>
    ';
} else {
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE activate_code=:code AND id=:id");
    $stmt->execute(['code' => $_GET['code'], 'id' => $_GET['user']]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        if ($row['status']) {
            $output .= '
                <h1 class="font-size-sl-72 font-weight-light mb-3">Error!</h1>
                <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Account already activated. Please <a href="login.php">Login</a> to continue.</p>
            ';
        } else {
            try {
                $id = $_GET['user'];
                $now = date('Y-m-d g:i A');

                // Fetch registration bonus details
                $sql = "SELECT amount, description FROM registration WHERE id = 1";
                $result = $conn->query($sql);
                $registration = $result->fetch();

                if ($registration) {
                    $bonus_amount = $registration['amount'];
                    $bonus_description = $registration['description'];

                    // Insert welcome bonus transaction
                    $sql4 = "INSERT INTO transaction VALUES(
                                NULL,
                                '$id',
                                '$now',
                                '1',
                                '$bonus_amount',
                                '$bonus_description',
                                '$bonus_amount'
                            )";
                    $conn->query($sql4);

                    // Insert activity log
                    $sql5 = "INSERT INTO activity (act_id, user_id, message, category, date_sent) VALUES (
                                NULL,
                                '$id',
                                '$bonus_description ($$bonus_amount)',
                                'Info',
                                '$now'
                            )";
                    $conn->query($sql5);

                    // Activate the user account
                    $stmt = $conn->prepare("UPDATE users SET status=:status WHERE id=:id");
                    $stmt->execute(['status' => 1, 'id' => $row['id']]);

                    $output .= '
                        <h1 class="font-size-sl-72 font-weight-light mb-3 text-success">Account Activated Successfully!</h1>
                        <p class="text-gray-90 font-size-20 mb-0 font-weight-light">
                            Welcome aboard! Your account has been activated.<br>
                            Email: <b>' . htmlspecialchars($row['email']) . '</b><br><br>
                            You can now <a href="login.php" class="base--color">Login</a> and start investing in medical equipment supply contracts to save lives and earn profits.
                        </p>
                    ';
                } else {
                    $output .= '
                        <h1 class="font-size-sl-72 font-weight-light mb-3">Error!</h1>
                        <p class="text-gray-90 font-size-20 mb-0 font-weight-light">Registration bonus details not found. Please contact support.</p>
                    ';
                }
            } catch (PDOException $e) {
                $output .= '
                    <h1 class="font-size-sl-72 font-weight-light mb-3">Error!</h1>
                    <p class="text-gray-90 font-size-20 mb-0 font-weight-light">
                        ' . htmlspecialchars($e->getMessage()) . '<br>
                        Please try again or <a href="register.php">Register</a>.
                    </p>
                ';
            }
        }
    } else {
        $output .= '
            <h1 class="font-size-sl-72 font-weight-light mb-3">Error!</h1>
            <p class="text-gray-90 font-size-20 mb-0 font-weight-light">
                Invalid activation code. Please <a href="register.php">Register</a> again.
            </p>
        ';
    }
    $pdo->close();
}
?>
<body>
    <!--========== Preloader ==========-->
    <!-- Preloader code omitted for brevity -->
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
                        <h2 class="page-title">Account Activation</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="<?= $baseurl ?>">Home</a></li>
                            <li>Account Activation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->

        <!-- activation section start -->
        <section class="pt-50 pb-120">
            <div class="container pt-120">
                <div class="row justify-content-center">
                    <div class="col-lg-10 mb-50 text-center">
                        <div class="activation-message">
                            <?php echo $output; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- activation section end -->

        <!-- footer section start -->
        <?php include('inc/footer.php') ?>
        <!-- footer section end -->
    </div> <!-- page-wrapper end -->

    <?php include('inc/scripts.php') ?>
</body>
</html>
