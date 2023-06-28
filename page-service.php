<?php get_header(); ?>
<main>
    <section class="page-fv">
        <div class="page-fv__inner">
            <h2 class="page-fv__heading">
                <span class="page-fv__heading-main">Service</span>
                <span class="page-fv__heading-sub">サービス紹介</span>
            </h2>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/service_fv.jpg")) ?>" alt="" class="page-fv__img">
        </div>
    </section>
    <?php get_template_part("breadcrumb"); ?>
    <div class="page-nav-links">
        <a href="" class="page-nav-link">購入サポート</a>
        <a href="" class="page-nav-link">修理・整備</a>
        <a href="" class="page-nav-link">車検・点検</a>
    </div>
    <div class="page-top">
        <div class="page-top__inner">
            <p class="page-top__title">お客様一人一人が求める<br>理想のカーライフに寄り添います</p>
            <p class="page-top__text">様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロ ントでは車種ブランド別の専用電話回線をご用意しております。</p>
        </div>
    </div>
    <section class="service" id="service1">
        <div class="service__inner">
            <div class="service__body">
                <div class="service__title-num">01</div>
                <h2 class="service__title-text">購入サポート</h2>
                <p class="service__text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p>
            </div>
            <div class="service__img">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/service1.jpg")) ?>" alt="" class="">
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>