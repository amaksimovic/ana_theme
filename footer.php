<div class="col-12 col-lg-3">
    <?php get_sidebar(); ?>
</div>

</div><!--end .row -->

</div><!--end .container -->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button><!-- STRELICA GORE -->

<footer class="p-3">

  <div class="row">

    <div class="col-12 col-md-12">
      <div class="container footer-social">
        <p><b>FOLLOW & LIKE US</b></p>
        <div class="text-centered social-icons-footer">
          <p><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/thin_facebook.png" alt="facebook" class="social-icons"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/thin_twitter.png" alt="twitter" class="social-icons"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/thin_pinterest.png" alt="pinterest" class="social-icons"></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/thin_instagram.png" alt="instagram" class="social-icons"></a></p>
        </div>
      </div>
      <div class="footer-text">
        <p>Copyright <?php echo date("Y"); ?>&nbsp;<a href="http://booksandanythingelse.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" alt="logo" height="20"></a>&nbsp;Books & Everything Else Club All rights reserved.</p>
        <p>YangHaizi theme by Aleksandar Maksimović</p>
      </div>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
