<?php
    include('init.php');
    include('admin/includes/format.php');
    $page_name = 'News';
    $page_parent = '';
    $page_title = 'News & Updates - '.$settings->siteTitle;
    $page_description = $settings->siteTitle . ' - Latest news and insights on medical equipment supply contracts, hospital funding, healthcare investment opportunities, and real-world impact stories.';
    include('inc/head.php');

    // Get the Current Page Number
    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
    }

    // SET Total Records Per Page Value
    $total_records_per_page = 6;

    // Calculate OFFSET Value
    $offset = ($page_no - 1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";

    // Get the Total Number of Pages for Pagination
    $result_count = $conn->query("SELECT COUNT(*) As total_records FROM news");
    $total_records = $result_count->fetch()["total_records"];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;

    // Fetch News with Pagination
    $news = [];
    $newsQuery = $conn->query("SELECT * from news ORDER BY id DESC LIMIT $offset, $total_records_per_page");
    if ($newsQuery->rowCount()) {
        $news = $newsQuery->fetchAll(PDO::FETCH_OBJ);
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
              <li>News</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <!-- blog section start -->
    <section class="pt-120 pb-120 border-top-1">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Our Latest</span> <b class="base--color">News & Insights</b></h2>
              <p class="mt-3">Stay informed with the latest updates on medical equipment supply chains, hospital contracts, healthcare infrastructure projects, and investment opportunities that create real impact.</p>
            </div>
          </div>
        </div><!-- row end -->

        <div class="row justify-content-center mb-none-30">
          <?php
            $index = ($page_no * $total_records_per_page) - ($total_records_per_page - 1);
            foreach ($news as $new) :
                // Healthcare-themed tags
                if ($index % 3 == 0) {
                    $tag1 = "Medical Equipment";
                    $tag2 = "Hospital Supply";
                } elseif ($index % 2 == 0) {
                    $tag1 = "Healthcare Funding";
                    $tag2 = "Investment";
                } else {
                    $tag1 = "Life-Saving Equipment";
                    $tag2 = "Impact Stories";
                }
          ?>
                <div class="col-lg-4 col-md-6 mb-30">
                  <div class="blog-card">
                    <div class="blog-card__thumb">
                      <img src="admin/images/<?= htmlspecialchars($new->photo); ?>" alt="<?= htmlspecialchars($new->short_title); ?>">
                    </div>
                    <div class="blog-card__content">
                      <h4 class="blog-card__title mb-3">
                        <a href="news-detail.php?id=<?= $new->id; ?>&title=<?= $new->slug; ?>">
                          <?= substrwords($new->short_title, 50); ?>
                        </a>
                      </h4>
                      <ul class="blog-card__meta d-flex flex-wrap mb-4">
                        <li>
                          <a href="news-detail.php?id=<?= $new->id; ?>&title=<?= $new->slug; ?>">
                            <?= $tag1; ?>, <?= $tag2; ?>
                          </a>
                        </li>
                        <li>
                          <i class="las la-calendar"></i>
                          <a href="#0"><?= $new->posted; ?></a>
                        </li>
                      </ul>
                      <p><?= substrwords($new->short_details, 180); ?></p>
                      <a href="news-detail.php?id=<?= $new->id; ?>&title=<?= $new->slug; ?>" class="cmn-btn btn-md mt-4">Read More</a>
                    </div>
                  </div>
                </div>
            <?php
              $index++;
            endforeach; 
            
            if (empty($news)) {
                echo '<div class="col-12 text-center"><p class="text-muted">No news articles available at the moment.</p></div>';
            }
            ?>
        </div>

        <!-- Pagination -->
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-10 text--center">
              <ul class="pagination">
                <li class="page-item"><a class="page-link <?php if($page_no <= 1){ echo "disabled"; } ?>" <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>> &laquo; </a></li>

                <?php
                if ($total_no_of_pages <= 10){
                    for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                        if ($counter == $page_no) {
                            echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                        } else {
                            echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                        }
                    }
                }
                elseif($total_no_of_pages > 10){
                    if($page_no <= 4) {
                        for ($counter = 1; $counter < 8; $counter++){
                            if ($counter == $page_no) {
                                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                            } else {
                                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                            }
                        }
                        echo "<li class='page-item'><a class='page-link'>...</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                    }
                    elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
                        echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                        echo "<li class='page-item'><a class='page-link'>...</a></li>";
                        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
                            if ($counter == $page_no) {
                                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                            } else {
                                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                            }
                        }
                        echo "<li class='page-item'><a class='page-link'>...</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
                    }
                    else {
                        echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
                        echo "<li class='page-item'><a class='page-link'>...</a></li>";
                        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                            if ($counter == $page_no) {
                                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                            } else {
                                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                            }
                        }
                    }
                } 
                ?>

                <li class="page-item <?php if($page_no >= $total_no_of_pages){ echo "disabled"; } ?>"><a class='page-link' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>> &raquo; </a></li>
                
                <?php if($page_no < $total_no_of_pages){
                    echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'> &raquo;&raquo; </a></li>";
                } ?>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- blog section end -->

    <!-- footer section start -->
    <?php include('inc/footer.php') ?>
    <!-- footer section end -->
  </div> <!-- page-wrapper end -->
  
  <?php include('inc/scripts.php') ?>
</body>
</html>
