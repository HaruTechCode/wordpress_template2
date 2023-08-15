<?php get_header(); ?>
<div class="single">
    <?php get_template_part("breadcrumb");?>
    <div class="single__inner">
        <?php if (have_posts()) : ?>
            <ul>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $terms = get_the_tags();
                    if($terms) {
                        foreach ($terms as $term) {
                            echo '<div class="single__tag tag"><a href="' . esc_url(get_term_link($term->term_id)) . '">' . $term->name . '</a></div>';
                        }
                    }
                    ?>
                    <h2 class="single__title">
                        <?php the_title(); ?>
                    </h2>
                    <time class="single__date date" datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y.m.d") ?></time>
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail( 'large', ['class' => 'single__img']); ?>
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/noimage.png")) ?>" alt="" class="single__img">
                    <?php endif; ?>
                    <div class="detail-content">
                        <?php the_content(); ?>
                    </div>
                    <a class="single__link" href="<?php echo esc_url(get_post_type_archive_link(get_post_type())); ?>">お知らせ一覧へ</a>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>