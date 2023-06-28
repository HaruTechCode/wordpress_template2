<?php get_header(); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php if (have_posts()) : ?>
	<ul>
		<?php while (have_posts()) : the_post(); ?>
            <div class="ttl"><?php the_title(); ?></div>
            <?php
                $fields = get_field_objects();
                foreach( $fields as $field ){
                    echo $field['label'] . " : " . $field['value'];
                    echo '<br>';
                }
            ?>
            <div class="ttl"><?php the_content(); ?></div>

		<?php endwhile; ?>
	</ul>
<?php endif; ?>
<?php get_footer(); ?>