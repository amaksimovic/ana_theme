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
        <h5>Follow and like us on social media</h5>
        <p><?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?></p>
      </div>
      <hr>
      <div class="container footer-text">
        <p>Copyright <?php echo date("Y"); ?>&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" alt="logo" height="20">&nbsp;Books & Everything Else Club All rights reserved.</p>
        <p>YangHaizi theme by Aleksandar Maksimović</p>
      </div>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
