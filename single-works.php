<?php get_header(); ?>
<div class="single-works">
    <?php get_template_part("breadcrumb");?>
    <div class="single-works__inner">
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $terms = get_the_terms($post->ID, 'works_category');
                    if($terms) {
                        foreach ($terms as $term) {
                            echo '<div class="tag"><a href="' . esc_url(get_term_link($term->term_id)) . '">' . $term->name . '</a></div>';
                        }
                    }
                    ?>
                    <h2 class="single-works__title">
                        <?php the_title(); ?>
                    </h2>
                    <time class="single-works__date date" datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y.m.d") ?></time>
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail( 'large', ['class' => 'single-works__img']); ?>
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/noimage.png")) ?>" alt="" class="single-works__img">
                    <?php endif; ?>
                    <div class="single-works__detail-content detail-content">
                        <?php the_content(); ?>
                    </div>
                    <a class="single-works__link" href="<?php echo esc_url(get_post_type_archive_link(get_post_type())); ?>">実績一覧へ戻る</a>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>