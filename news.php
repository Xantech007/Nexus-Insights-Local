<?php
    include('init.php');
    include('admin/includes/format.php');

    $page_name = 'News';
    $page_parent = '';
    $page_title = 'Latest Agri News & Insights - '.$settings->siteTitle;
    $page_description = $settings->siteTitle.' brings you the latest updates in sustainable agriculture, precision farming, crop yield optimization, climate-resilient practices, and profitable farm investment opportunities across Africa and beyond. Together We Cultivate the Future!';
    include('inc/head.php');

    // Pagination Settings
    $total_records_per_page = 6;
    $page_no = (isset($_GET['page_no']) && $_GET['page_no'] != "") ? $_GET['page_no'] : 1;
    $offset = ($page_no - 1) * $total_records_per_page;

    // Total records & pages
    $total_records = $conn->query("SELECT COUNT(*) As total_records FROM news")->fetch()["total_records"];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;

    // Fetch news
    $news = [];
    $newsQuery = $conn->query("SELECT * FROM news ORDER BY id DESC LIMIT $offset, $total_records_per_page");
    if ($newsQuery->rowCount()) {
        $news = $newsQuery->fetchAll(PDO::FETCH_OBJ);
    }
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
          <div class="col-lg-8">
            <h2 class="page-title text-white">Agri News & Farm Insights</h2>
            <ul class="page-breadcrumb">
              <li><a href="<?= $baseurl ?>">Home</a></li>
              <li>News & Updates</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->

    <!-- Agri News Section Start -->
    <section class="pt-120 pb-120 border-top-1 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <div class="section-header">
              <h2 class="section-title">
                <span class="font-weight-normal">Latest from the Fields:</span> 
                <b class="base--color">Agriculture News & Insights</b>
              </h2>
              <p class="mt-3">
                Stay ahead with real-time updates on sustainable farming practices, precision agriculture technology, 
                climate-smart crop varieties, irrigation innovations, market trends, and proven investment strategies 
                that deliver consistent yields season after season.
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-none-30">
          <?php
            $index = ($page_no - 1) * $total_records_per_page + 1;
            foreach ($news as $new):
                // Rotate realistic agricultural tags
                $tags = [
                    1 => ["Sustainable Farming", "Green Practices"],
                    2 => ["Precision Agriculture", "Farm Tech"],
                    3 => ["Crop Yield Boost", "High-Value Crops"],
                    4 => ["Irrigation Systems", "Water Efficiency"],
                    5 => ["Climate Resilience", "Adaptation"],
                    6 => ["Agribusiness", "Farm Investment"]
                ];
                $tagSet = $tags[($index - 1) % 6 + 1];
                $tag1 = $tagSet[0];
                $tag2 = $tagSet[1];
          ?>
              <div class="col-lg-4 col-md-6 mb-30">
                <div class="blog-card border-radius--10 overflow-hidden">
                  <div class="blog-card__thumb">
                    <img src="admin/images/<?= $new->photo; ?>" 
                         alt="<?= htmlspecialchars($new->short_title); ?>" 
                         class="img-fluid" loading="lazy">
                    <div class="blog-card__date">
                      <span><?= date('d', strtotime($new->posted)); ?></span>
                      <small><?= date('M', strtotime($new->posted)); ?></small>
                    </div>
                  </div>
                  <div class="blog-card__content">
                    <ul class="blog-card__meta d-flex flex-wrap mb-3">
                      <li><i class="las la-tags base--color"></i> <?= $tag1; ?>, <?= $tag2; ?></li>
                      <li class="ml-auto"><i class="las la-calendar base--color"></i> <?= date('M j, Y', strtotime($new->posted)); ?></li>
                    </ul>
                    <h4 class="blog-card__title base--color mb-3">
                      <a href="news-detail.php?id=<?= $new->id; ?>&title=<?= $new->slug; ?>">
                        <?= htmlspecialchars(substrwords($new->short_title, 60)); ?>
                      </a>
                    </h4>
                    <p class="text-muted">
                      <?= htmlspecialchars(substrwords($new->short_details, 160)); ?>
                    </p>
                    <a href="news-detail.php?id=<?= $new->id; ?>&title=<?= $new->slug; ?>" 
                       class="cmn-btn btn-sm mt-4 text-uppercase">Read More <i class="las la-arrow-right ml-2"></i></a>
                  </div>
                </div>
              </div>
          <?php
              $index++;
            endforeach;

            // No news fallback
            if (empty($news)):
          ?>
              <div class="col-lg-8 text-center py-5">
                <h4>No news available at the moment.</h4>
                <p>Check back soon for updates from our farms and agronomy team.</p>
              </div>
          <?php endif; ?>
        </div>

        <!-- Clean Pagination -->
        <?php if ($total_no_of_pages > 1): ?>
        <div class="row mt-50">
          <div class="col-lg-12 text-center">
            <ul class="pagination justify-content-center">
              <li class="page-item <?= ($page_no <= 1) ? 'disabled' : ''; ?>">
                <a class="page-link" href="?page_no=<?= $previous_page; ?>" aria-label="Previous">
                  <i class="las la-angle-left"></i> Previous
                </a>
              </li>

              <?php
                for ($i = 1; $i <= $total_no_of_pages; $i++):
                  if ($i == $page_no):
              ?>
                <li class="page-item active"><a class="page-link"><?= $i; ?></a></li>
              <?php else: ?>
                <li class="page-item"><a class="page-link" href="?page_no=<?= $i; ?>"><?= $i; ?></a></li>
              <?php
                  endif;
                endfor;
              ?>

              <li class="page-item <?= ($page_no >= $total_no_of_pages) ? 'disabled' : ''; ?>">
                <a class="page-link" href="?page_no=<?= $next_page; ?>" aria-label="Next">
                  Next <i class="las la-angle-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </section>
    <!-- Agri News Section End -->

    <!-- footer section start -->
    <?php include('inc/footer.php'); ?>
    <!-- footer section end -->
  </div> <!-- page-wrapper end -->

  <?php include('inc/scripts.php'); ?>
</body>
</html>
