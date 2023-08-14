<?php get_header(); ?>
<main>
    <section class="page-fv news-fv">
        <div class="page-fv__inner news-fv__inner">
            <h2 class="page-fv__heading">
                <span class="page-fv__heading-main">News</span>
                <span class="page-fv__heading-sub">お知らせ</span>
            </h2>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/news_fv.jpg")) ?>" alt="" class="page-fv__img md-none">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/news_fv_sp.jpg")) ?>" alt="" class="page-fv__img md-show">
        </div>
    </section>
    <?php get_template_part("breadcrumb");?>
    <div class="news__inner inner">
        <div class="news-category__list-container">
            <ul class="news-category__list">
                <li class="category-item-current">すべての実績</li>
                <?php
                $terms = get_tags();

                foreach ( $terms as $term ) {
                    $term_link = get_term_link( $term );
                    echo '<li><a class="category-item-other" href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
                }
                ?>
            </ul>
        </div>

        <div class="news__content-inner">
            <?php if(have_posts()): ?>
                <div class="news__articles-wrapper">
                    <ul class="news__articles">
                        <?php while (have_posts()) : the_post(); ?>
                            <li>
                                <a class="news__article" href="<?php the_permalink() ?>">
                                    <div class="news__article-body">
                                        <div class="news__date date"><?php echo get_the_date('Y.m.d') ?></div>
                                        <?php
                                        $terms = get_the_tags($post->ID);
                                        if($terms) {
                                            echo '<ul class="news__article-tags">';
                                            foreach ($terms as $term) {
                                                echo '<li class="news__article-tag tag">' . $term->name . '</li>';
                                            }
                                            echo '</ul>';
                                        }
                                        ?>
                                        <div class="news__article-title md-none">
                                            <span class="news__underline"><?php echo mb_strimwidth(get_the_title(), 0, 92, "..."); ?></span>
                                        </div>
                                        <div class="news__article-title md-show">
                                            <span class="news__underline"><?php echo mb_strimwidth(get_the_title(), 0, 48, "..."); ?></span>
                                        </div>
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