<?php get_header(); ?>
<main class="not-found">
    <section class="page-fv not-found-fv">
        <div class="page-fv__inner">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/404pc.jpg")) ?>" alt="" class="page-fv__img md-none">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/404sp.jpg")) ?>" alt="" class="page-fv__img md-show">
            <div class="not-found-fv__body">
                <h1 class="not-found-fv__title">404 Not Found</h1>
                <p class="not-found-fv__text md-none">
                    お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します
                </p>
            </div>
        </div>
    </section>

    <div class="inner">
        <p class="not-found__text md-show">
            お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します
        </p>
    </div>
</main>
<?php get_footer(); ?>