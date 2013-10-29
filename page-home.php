<?php get_header(); ?>

            <div class="homesearch">
                <h1><?php bloginfo('name'); ?></h1>
                <br />
                <br />
                <form method="get" id="searchform" action="<?php bloginfo('url') ?>" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="s" id="s">
                    </div>
                    <br />
                    <input type="submit" value="Search <?php bloginfo('name'); ?>" class="btn btn-primary btn-lg" >
                </form>
            </div> <!-- ./homesearch -->

<?php wp_footer(); ?>