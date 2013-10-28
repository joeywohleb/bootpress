      <hr>

      <footer>
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?> <?php endif; ?>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?> <?php endif; ?>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?> <p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?></p> <?php endif; ?>
            </div><!--/span-->
          </div>
      </footer>

    </div><!--/.container-->


    <?php wp_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/site.js"></script>
  </body>
</html>