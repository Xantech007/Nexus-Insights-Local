<footer class="footer bg_img" data-background="assets/images/bg/bg-7.jpg">
  <div class="footer__top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <a href="<?= $baseurl; ?>" class="footer-logo"><img src="assets/images/logo.png" alt="image"></a>
          <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-4">
            <li><a href="<?= $baseurl; ?>">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="terms">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center">
          <p>© <?= $year; ?> <a href="<?= $baseurl; ?>" class="base--color">Nexus Insights</a>. All rights reserved</p>
        </div>
        <div class="col-md-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
            <li><a href="wa.me/+447438783028" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i class="lab la-whatsapp"></i></a></li>
            <li><a href="#0" data-toggle="tooltip" data-placement="top" title="Telegram"><i class="lab la-telegram"></i></a></li>
            <li><a href="mailto:cs.nexus.insights@gmail.com" data-toggle="tooltip" data-placement="top" title="Email"><i class="las la-envelope"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Floating Customer Support Button -->
<a href="cs-message.php" class="support-float" title="Customer Support">
    <i class="las la-headset"></i>
</a>

<style>
.support-float{
    position: fixed;
    bottom: 25px;
    right: 25px;
    width: 60px;
    height: 60px;
    background: #28a745;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(0,0,0,.3);
    z-index: 9999;
    transition: all .3s ease;
}

.support-float:hover{
    background: #218838;
    color: #fff;
    transform: scale(1.1);
}
</style>
