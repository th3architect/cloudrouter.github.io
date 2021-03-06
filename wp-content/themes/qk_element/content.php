<div <?php post_class('blog-post'); ?>>
	<div class="blog-content">
		<?php if(has_post_thumbnail()){ ?>
		<div class="blog-gal">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php } ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<ul class="post-tags">
			<li><?php _e('by', 'element'); ?> <?php the_author_posts_link(); ?></li>
			<li><a href="#"><?php the_time('D F Y'); ?></a></li>
			<li><?php the_category(', '); ?></li>
			<li><?php comments_popup_link(__('0 Comment ', 'element'), __('1 Comment', 'element'), __(' % Comments', 'element')); ?></li>
			<?php if(is_sticky()){ ?>
			<li><?php _e('Sticky', 'element'); ?></li>
			<?php } ?>
		</ul>
		<p><?php echo do_shortcode(element_excerpt($limit = 40)); ?></p>
		<a href="<?php the_permalink(); ?>"><?php _e('Details', 'element'); ?>  <i class="fa fa-angle-right"></i></a>								
	</div>
</div>