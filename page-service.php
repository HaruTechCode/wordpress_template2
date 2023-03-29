<?php get_header(); ?>
<main>
    <section class="page-fv">
        <div class="page-fv__inner">
            <h2 class="page-fv__heading">
                <span class="page-fv__heading-main">About</span>
                <span class="page-fv__heading-sub">私たちについて</span>
            </h2>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/about_fv.jpg")) ?>" alt="" class="page-fv__img">
        </div>
    </section>
    <?php get_template_part("breadcrumb"); ?>
    <div class="page-nav-links">
        <a href="" class="page-nav-link">経営理念</a>
        <a href="" class="page-nav-link">アクセス</a>
        <a href="" class="page-nav-link">会社概要</a>
    </div>
    <div class="page-top">
        <div class="page-top__inner">
            <p class="page-top__title">国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを</p>
            <p class="page-top__text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
        </div>
    </div>

</main>
<?php get_footer(); ?>