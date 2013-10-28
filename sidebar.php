        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">

			<div class="well sidebar-nav">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>

					<h2><?php _e('Categories'); ?></h2>
					<ul><?php wp_list_categories('title_li=&orderby=name'); ?></ul>

					<h2><?php _e('Archives'); ?></h2>
					<ul><?php wp_get_archives('type=monthly'); ?></ul>

					<h2><?php _e('Meta'); ?></h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>

				<?php endif; ?>
			</div>
        </div><!--/span-->