<?php get_header(); ?>
<main>
    <section class="page-fv">
        <div class="page-fv__inner">
            <h2 class="page-fv__heading">
                <span class="page-fv__heading-main">Works</span>
                <span class="page-fv__heading-sub">実績紹介</span>
            </h2>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/works_fv.jpg")) ?>" alt="" class="page-fv__img">
        </div>
    </section>
    <?php get_template_part("breadcrumb");?>
    <div class="works__inner inner">
        <div class="works-category__list-container">
            <ul class="works-category__list">
                <li><a class="category-item-other" href="<?php echo esc_url(home_url('works')); ?>">すべての実績</a></li>
                <?php
                $terms = get_terms('works_category');

                foreach ( $terms as $term ) {
                    $term_link = get_term_link( $term );
                    if (is_tax('works_category', $term)) {
                        echo '<li class="category-item-current">' . $term->name . '</li>';
                    } else {
                        echo '<li><a class="category-item-other" href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>

        <div class="works__content-inner">
            <?php if(have_posts()): ?>
                <div class="works__articles-wrapper">
                    <ul class="works__articles">
                        <?php while (have_posts()) : the_post(); ?>
                            <li>
                                <a class="works__article" href="<?php the_permalink() ?>">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail( 'medium', ['class' => 'works__article-img']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo esc_url(get_theme_file_uri("/images/noimage.png")) ?>" alt="" class="works__article-img">
                                    <?php endif; ?>
                                    <div class="works__article-body">
                                        <?php
                                        $terms = get_the_terms($post->ID, 'works_category');
                                        if($terms) {
                                        foreach ($terms as $term) {
                                            echo '<div class="works__article-category tag">' . $term->name . '</div>';
                                        }
                                        }
                                        ?>
                                        <div class="works__article-title md-none">
                                            <span class="works__underline"><?php echo mb_strimwidth(get_the_title(), 0, 92, "..."); ?></span>
                                        </div>
                                        <div class="works__article-title md-show">
                                            <span class="works__underline"><?php echo mb_strimwidth(get_the_title(), 0, 48, "..."); ?></span>
                                        </div>
                                        <div class="works__date date"><?php echo get_the_date('Y.m.d') ?></div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <div>
                        <?php
                        $args = array(
                            'mid_size' => 2,
                            'prev_text' => '前',
                            'next_text' => '後',
                            'screen_reader_text' => 'ページャー'
                        );
                        $args = array(
                            'mid_size'   => 1,
                            'prev_text'  => '<span class="pagination__prev"></span>',
                            'next_text'  => '<span class="pagination__next"></span>',
                        );
                        the_posts_pagination($args);
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>