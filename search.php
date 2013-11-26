<?php get_header(); ?>
            <div class="row row-offcanvas row-offcanvas-right">
                <section class="col-xs-12 col-sm-9">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle Sidebar</button>
                    </p>
                    <div class="row">
                        <?php if ( have_posts() ) : ?>

                                    <h2><?php _e('Search Results for') ?> <span class="text-muted"><?php echo $_GET['s'] ?></span></h2>

                            <?php while ( have_posts() ) : the_post(); ?>

                                <article class="post" id="post-<?php the_ID(); ?>">
                                    <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php __('Permanent Link for', 'bootpress') . ' ' . the_title(); ?>"><?php the_title(); ?></a></h2>
                                    <div class="post-info">
                                        <span class="glyphicon glyphicon-time"></span> <?php the_time(get_option('date_format').', '.get_option('time_format')) ?>
                                        <span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link(); ?>
                                        <span class="glyphicon glyphicon-folder-open"></span> <?php the_category(', ') ?>
                                        <?php if ( comments_open() ) : ?><span class="glyphicon glyphicon-comment"></span> <?php comments_popup_link(); endif; ?>
                                        <span class="glyphicon glyphicon-wrench"></span> <?php edit_post_link(); ?> </div>
                                    <div class="post-content">
                                        <?php the_excerpt(); ?>
                                    </div>

                                    <div class="post-info">
                                        <?php if( function_exists( 'the_tags' ) )
                                            the_tags('<span class="glyphicon glyphicon-tags"></span> '. __('Tags') . ': ');
                                        ?>
                                    </div>
                                </article>

                            <?php endwhile; ?>
                            <div class="row">
                                <div class="pull-left"><?php next_posts_link('<span class="glyphicon glyphicon-chevron-left"></span> ' . __('Previous Posts', 'bootpress')) ?></div>
                                <div class="pull-right"><?php previous_posts_link(__('Next Posts', 'bootpress') . ' <span class="glyphicon glyphicon-chevron-right"></span>') ?></div>
                            </div>

                        <?php else : ?>
                            <article class="post">
                                <h2 class="post-title"><?php echo __('Sorry, no posts matched', 'bootpress'); ?> <span class="text-muted"><?php echo $_GET['s'] ?></span></h2>
                                <div class="post-content"><p><?php echo __('Please check your spelling or try again using different search terms.', 'bootpress'); ?></p></div>
                            </article>

                        <?php endif; ?>
                            </div><!--/row-->
                        </section><!--/span-->

                <?php get_sidebar(); ?>

            </div><!--/row-->

<?php get_footer(); ?>