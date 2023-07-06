<?php get_header(); ?>
<section class="page-fv">
    <div class="page-fv__inner">
        <h2 class="page-fv__heading">
            <span class="page-fv__heading-main">Works</span>
            <span class="page-fv__heading-sub">実績紹介</span>
        </h2>
        <img src="<?php echo esc_url(get_theme_file_uri("/images/works_fv.jpg")) ?>" alt="" class="page-fv__img">
    </div>
</section>
<div class="flex-wrapper">
    <aside>
        <ul class="works-category__list">
            <li>全ての実績</li>
            <?php
            $terms = get_terms('works_category');

            foreach ( $terms as $term ) {
                $term_link = get_term_link( $term );
                echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>';
                //echo '<li>' . esc_html($term->name) . '</li>';
            }
            ?>
        </ul>
    </aside>
    <main>
        <?php get_template_part('searchform-works'); ?>
        <section class = "archive-works">
            <?php
                $args = array(
                    'post_type' => 'works',
                    'meta_key' => 'published',
                    'meta_value' => 1
                );
                // $args = array(
                    // 'post_type' => 'works',
                    // 'meta_query' => array(
                        // 'key' => 'published',
                        // 'value' => 1,
                        // 'compare' => '=',
                    // )
                // );

                $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
                <ul>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail( 'thumbnail', ['class' => 'archive-works__img']); ?>
                            <?php endif; ?>
                            <?php
                            $terms = get_the_terms($post->ID, 'works_category');
                            foreach ($terms as $term) {
                                echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="ttl"><?php the_title(); ?></div>
                            </a>
                            <div class="date"><?php echo get_the_date('Y.m.d') ?></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </section>
        <section class = "archive-works">
            <?php if (have_posts()) : ?>
                <ul>
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail( 'thumbnail', ['class' => 'archive-works__img']); ?>
                            <?php endif; ?>
                            <?php
                            $terms = get_the_terms($post->ID, 'works_category');
                            foreach ($terms as $term) {
                                echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <div class="ttl"><?php the_title(); ?></div>
                            </a>
                            <div class="date"><?php echo get_the_date('Y.m.d') ?></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </section>
        <?php
        $args = array(
            'mid_size' => 2,
            'prev_text' => '前',
            'next_text' => '後',
            'screen_reader_text' => 'ページャー'
        );
        the_posts_pagination($args);
        ?>
    </main>
</div>
<?php get_footer(); ?>