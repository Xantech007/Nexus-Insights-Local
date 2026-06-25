<footer class="footer text-center text-sm-left">
    &copy; <?php echo $year." ".$settings->siteTitle; ?> <span class="d-none d-sm-inline-block float-right">All Rights Reserved.</span>
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
