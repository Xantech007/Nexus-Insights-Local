<?php
    include('init.php');
    $id = $_REQUEST['id'];
    $page_name = 'Post';
    $page_parent = 'News';
    $page_title = $settings->siteTitle . ' - News & Updates';
    $page_description = $settings->siteTitle . ' - Latest updates on medical equipment supply, hospital contracts, healthcare investment opportunities, and industry insights.';
    include('inc/head.php');

    $userQuery = $conn->prepare("SELECT * from news where id = ? LIMIT 1");
    $userQuery->execute(array($id));
    $user = $userQuery->fetch(PDO::FETCH_OBJ);

    // Default tags for medical equipment / healthcare theme
    $tag1 = "Healthcare";
    $tag2 = "Investment";

    if ($user) {
        $post_id = $user->id;
        if ($post_id % 3 == 0) {
            $tag1 = "Medical Equipment";
            $tag2 = "Hospital Supply";
        } elseif ($post_id % 2 == 0) {
            $tag1 = "Healthcare Funding";
            $tag2 = "Investment";
        } else {
            $tag1 = "Life-Saving Equipment";
            $tag2 = "Impact";
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
   
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/bg/bg-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">News & Updates</h2>
            <ul class="page-breadcrumb">
              <li><a href="<?= $baseurl ?>">Home</a></li>
              <li>Post Details</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <!-- blog-details-section start -->
    <section class="pt-150 pb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-details-wrapper">
              <div class="blog-details__thumb">
                <img src="admin/images/<?= htmlspecialchars($user->photo ?? 'default.jpg'); ?>" alt="<?= htmlspecialchars($user->title ?? 'News Post'); ?>">
                <div class="post__date">
                  <span class="date"><?= $user->posted ?? 'N/A'; ?></span>
                </div>
              </div><!-- blog-details__thumb end -->

              <div class="blog-details__content mt-4">
                <div class="blog-meta mb-3">
                  <span class="badge base--bg"><?= $tag1 ?></span>
                  <span class="badge base--bg"><?= $tag2 ?></span>
                </div>
                
                <h1 class="blog-details__title"><?= htmlspecialchars($user->title ?? 'Untitled Post'); ?></h1>
                
                <div class="blog-details__body mt-4">
                    <?= $user->details ?? '<p class="text-muted">Post content not available.</p>'; ?>
                </div>
              </div><!-- blog-details__content end -->
            </div><!-- blog-details-wrapper end -->
          </div>
        </div>
      </div>
    </section>
    <!-- blog-details-section end -->

    <!-- footer section start -->
    <?php include('inc/footer.php') ?>
    <!-- footer section end -->
  </div> <!-- page-wrapper end -->
  
  <?php include('inc/scripts.php') ?>
</body>
</html>
