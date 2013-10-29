            <hr />

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
                </div><!--/.row-->
            </footer>

        </div><!--/.container-->

        <?php wp_footer(); ?>

    </body>
</html>