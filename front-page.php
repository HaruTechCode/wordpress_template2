<?php get_header(); ?>
<main>
    <div class="fv">
      <div class="fv__inner">
        <div class="fv__slick js-slick">
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
            <a class="card__link animation-link animation-link--button">read more</a>
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
            <a class="card__link animation-link animation-link--button">read more</a>
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
            <a class="card__link animation-link animation-link--button">read more</a>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- TODO 画像名統一。ワードプレスから引っ張ってくるならしなくていいから後回しでいいけど。 -->
  <section class="top-works">
    <div class="top-works__inner inner">
      <!-- TODO inview使って左からフェードイン -->
      <h2 class="top-works__heading large-heading js-inview left-fade-in">Works</h2>
      <!-- TODO パーシャル使ったり、他との共通点を探したり、ワードプレスのデータを入れたり -->
      <div class="top-works__articles-wrapper">
        <ul class="top-works__articles">
          <li class="top-works__article top-fade-in js-inview">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/top_works1.jpg")) ?>" alt="" class="top-works__article-img">
            <div class="top-works__article-body">
              <div class="top-works__article-category tag">修理・整備</div>
              <div class="top-works__article-title">車のドアが開けられなくなった｜ドアロックの交換と...</div>
              <div class="top-works__article-text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...</div>
              <time class="top-works__date date" datetime="2022-09-02">2022.09.02</time>
            </div>
          </li>
          <li class="top-works__article top-fade-in js-inview">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/top_works1.jpg")) ?>" alt="" class="top-works__article-img">
            <div class="top-works__article-body">
              <div class="top-works__article-category tag">修理・整備</div>
              <div class="top-works__article-title">車のドアが開けられなくなった｜ドアロックの交換と...</div>
              <div class="top-works__article-text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく...</div>
              <time class="top-works__date date" datetime="2022-09-02">2022.09.02</time>
            </div>
          </li>
        </ul>
        <div class="top-works__link-container">
          <a href="" class="top-works__link animation-link">read more</a>
        </div>
      </div>
    </div>
  </section>
  <!-- 左に寄りすぎる -->
  <section class="top-news">
    <div class="top-news__inner inner">
      <div class="top-news__side">
        <h2 class="top-works__heading large-heading js-inview left-fade-in">News</h2>
        <ul class="top-news__tag-list js-inview bottom-fade-in">
          <!-- TODO aタグが必要かも。wordPressの関数でタグを表示したあとに修正 -->
          <li class="top-news__tag-list-item top-news__tag-list-item--selected">すべてのお知らせ</li>
          <li class="top-news__tag-list-item">トピックス</li>
          <li class="top-news__tag-list-item">イベント・キャンペーン</li>
          <li class="top-news__tag-list-item">入庫車情報</li>
        </ul>
      </div>
      <div class="top-news__main">
        <ul class="top-news__articles">
          <li class="top-news__article">
            <div class="top-news__article-info">
              <time class="top-news__date date" datetime="2022-09-02">2022.09.02</time>
              <div class="top-news__tag tag tag--white">トピックス</div>
              <div class="top-news__tag tag tag--white">イベント・キャンペーン</div>
            </div>
            <div class="top-news__article-title">2022年10月8日・9日・10日の3日間、試乗車フェアを開催します</div>
          </li>
          <li class="top-news__article">
            <div class="top-news__article-info">
              <time class="top-news__date date" datetime="2022-09-02">2022.09.02</time>
              <div class="top-news__tag tag tag--white">トピックス</div>
              <div class="top-news__tag tag tag--white">イベント・キャンペーン</div>
            </div>
            <div class="top-news__article-title">2022年10月8日・9日・10日の3日間、試乗車フェアを開催します</div>
          </li>
        </ul>
        <div class="top-news__link-container">
          <a href="" class="top-news__link animation-link">read more</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>