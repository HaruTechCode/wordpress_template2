<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<ul>
		<?php while (have_posts()) : the_post(); ?>
            <div class="ttl"><?php the_title(); ?></div>
            <div class="content"><?php the_content(); ?></div>

		<?php endwhile; ?>
	</ul>
<?php endif; ?>
<?php get_footer(); ?>
<?php get_footer(); ?>