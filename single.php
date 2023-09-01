<?php get_header(); ?>
<div class="single">
    <?php get_template_part("breadcrumb");?>
    <div class="single__wrapper">
        <main class="single__main">
            <div class="single__main-inner">
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
        </main>
        <aside class="single__sidebar sidebar">
             <div class="sidebar__title">最新記事</div>
             <?php
             $args = [
                "post_type" => "post",
                "posts_per_page" => 3,
                "orderby" => "date",
                "order" => "DESC"
            ];
             $the_query = new WP_Query($args);
             ?>
            <?php if ($the_query->have_posts()) : ?>
                <ul class="sidebar__cards">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="sidebar__card">
                            <a href="<?php the_permalink() ?>" class="sidebar__card-link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('small', array('class' => 'sidebar__img')); ?>
                                <?php else : ?>
                                    <img class="sidebar__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.png")); ?>" alt="NoImage画像" />
                                <?php endif; ?>
                                <div class="sidebar__card-body">
                                    <h3 class="sidebar__card-title"><?php echo wp_trim_words( get_the_title(), 36, '…' ); ?></h3>
                                    <time class="sidebar__date date" datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y.m.d") ?></time>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>記事が投稿されていません</p>
            <?php endif; ?>
            <div class="sidebar__title">アーカイブ</div>
            <ul class="sidebar__list">
                <?php $args = [
                    'type' => 'monthly',
                    'limit' => 12,
                ]; ?>
                <?php wp_get_archives( $args ); ?>
            </ul>
            <div class="sidebar__title">カテゴリー</div>
            <ul class="sidebar__list">
                <?php
                $posttags = get_tags();  //タグの情報を取得
                if ($posttags) {
                    foreach($posttags as $tag) {
                        echo ' <li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                    }
                }
                ?>
            </ul>
        </aside>
    </div>
</div>
<?php get_footer(); ?>