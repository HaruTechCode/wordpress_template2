<?php get_header(); ?>
<main>
    <div class="fv">
        <div class="fv__inner">
            <div class="fv__slick js-slick md-none">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/fv01.jpg")) ?>" alt="">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/fv02.jpg")) ?>" alt="">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/fv03.jpg")) ?>" alt="">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/fv04.jpg")) ?>" alt="">
            </div>
            <div class="fv__text-container">
                <div class="fv__text-wrapper">
                    <div class="fv__text">あなたの</div>
                    <div class="fv__text">日常が目覚める</div>
                </div>
            </div>
        </div>
    </div>
    <div class="flowing-box js-flowing-box">
        <div class="flowing-box__inner js-flowing-box__inner">
            <div class="flowing-box__body js-flowing-box__body">
                <p>Good life for Good Car</p>
            </div>
        </div>
    </div>
    <section class="top-about">
        <div class="top-about__inner inner">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/top-about-img.jpg")) ?>" alt="" class="top-about__img">
            <div class="top-about__body">
                <h3 class="top-about__title">About us</h3>
                <div class="top-about__text">
                    弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                    これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
                </div>
                <div class="top-about__link-wrapper">
                    <a class="top-about__link animation-link">read more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="top-service">
        <div class="top-service__inner inner">
            <h2 class="top-service__heading large-heading large-heading--right">Service</h2>
            <ul class="top-service__cards">
                <li class="top-service__card card">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/top_service1.jpg")) ?>" alt="" class="card__img">
                    <div class="card__img"></div>
                    <div class="card__title-wrapper">
                        <div class="card__title-sub">Service01</div>
                        <div class="card__title-main">購入サポート</div>
                    </div>
                    <div class="card__text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</div>
                    <div class="card__link-wrapper">
                        <a href="<?php echo esc_url(home_url('service#service1')); ?>" class="card__link animation-link animation-link--button">read more</a>
                    </div>
                  </li>
                  <li class="top-service__card card">
                      <img src="<?php echo esc_url(get_theme_file_uri("/images/top_service2.jpg")) ?>" alt="" class="card__img">
                      <div class="card__img"></div>
                      <div class="card__title-wrapper">
                          <div class="card__title-sub">Service02</div>
                          <div class="card__title-main">修理・整備</div>
                      </div>
                      <div class="card__text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</div>
                      <div class="card__link-wrapper">
                          <a href="<?php echo esc_url(home_url('service#service2')); ?>" class="card__link animation-link animation-link--button">read more</a>
                      </div>
                  </li>
                  <li class="top-service__card card">
                      <img src="<?php echo esc_url(get_theme_file_uri("/images/top_service3.jpg")) ?>" alt="" class="card__img">
                      <div class="card__img"></div>
                      <div class="card__title-wrapper">
                          <div class="card__title-sub">Service03</div>
                          <div class="card__title-main">車検・点検</div>
                      </div>
                      <div class="card__text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。</div>
                      <div class="card__link-wrapper">
                          <a href="<?php echo esc_url(home_url('service#service3')); ?>" class="card__link animation-link animation-link--button">read more</a>
                      </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="top-works">
      <div class="top-works__inner inner">
        <h2 class="top-works__heading large-heading js-inview left-fade-in">Works</h2>
        <?php
        $args = [
          'post_type' => 'works',
          'posts_per_page' => 3
        ];
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
            <div class="top-works__articles-wrapper">
                <ul class="top-works__articles">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="top-works__article top-fade-in js-inview">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail( 'medium', ['class' => 'top-works__article-img']); ?>
                            <?php endif; ?>
                            <div class="top-works__article-body">
                                <?php
                                $terms = get_the_terms($post->ID, 'works_category');
                                if($terms) {
                                  foreach ($terms as $term) {
                                      echo '<div class="top-works__article-category tag"><a href="' . get_term_link($term) . '">' . $term->name . '</a></div>';
                                  }
                                }
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="top-works__article-title"><span class="top-works__underline"><?php the_title(); ?></span></div>
                                </a>
                                <div class="top-works__article-text md-none"><?php echo mb_substr(strip_tags(get_the_content()), 0, 82) . '...'; ?></div>
                                <div class="top-works__date date"><?php echo get_the_date('Y.m.d') ?></div>
                            </div>
                        </li>
                    <?php endwhile; ?>
              </ul>
            </div>
        <?php endif; ?>
    </section>
    <section class="top-news">
        <div class="top-news__inner inner">
            <div class="top-news__side">
                <h2 class="top-works__heading large-heading js-inview left-fade-in">News</h2>
                <ul class="top-news__tag-list js-inview bottom-fade-in">
                    <li class="top-news__tag-list-item top-news__tag-list-item--selected">すべてのお知らせ</li>
                    <?php
                        $tags = get_tags();
                        foreach ( $tags as $tag ) {
                            echo '<li class="top-news__tag-list-item">';
                            echo '<a href="';
                            echo esc_url(get_tag_link($tag->term_id));
                            echo '">';
                            echo $tag->name;
                            echo '</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="top-news__main">
                <ul class="top-news__articles">
                    <?php
                        $args = [
                            'post_type' => 'post',
                            'post_per_page' => 5
                        ];
                        $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="top-news__article">
                                <div class="top-news__article-info">
                                    <time class="top-news__date date" datetime="<?php echo get_the_date("Y-m-d") ?>"><?php echo get_the_date("Y.m.d") ?></time>
                                    <?php
                                        $tags = get_the_tags();
                                        foreach ( $tags as $tag ) {
                                            echo '<div class="top-news__tag tag tag--white">';
                                            echo '<a class="tag__link" href="';
                                            echo esc_url(get_tag_link($tag->term_id));
                                            echo '">';
                                            echo $tag->name;
                                            echo '</a></div>';
                                        }
                                    ?>
                                </div>
                                <div class="top-news__article-title"><a href="<?php echo esc_url(get_permalink($post->ID)) ?>"><?php echo the_title(); ?></a></div>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </ul>
                <div class="top-news__link-container">
                    <a href="" class="top-news__link animation-link">read more</a>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>