<?php get_header(); ?>
    <section class="page-fv">
        <div class="page-fv__inner">
            <h2 class="page-fv__heading">
                <span class="page-fv__heading-main">Contact</span>
                <span class="page-fv__heading-sub">お問い合わせ</span>
            </h2>
            <img src="<?php echo esc_url(get_theme_file_uri("/images/contact_fv.jpg")) ?>" alt="" class="page-fv__img">
        </div>
    </section>
    <?php get_template_part("breadcrumb");?>

    <div class="contact-complete">
        <div class="contact-complete__inner">
            <p class="contact-complete__title">THANK YOU FOR CONTACTING US.</p>
            <p class="contact-complete__text">お問い合わせありがとうございます。</p>
            <p class="contact-complete__text">
                近日中に折り返しご連絡いたします。
                <br>
                今しばらくお待ちくださいますよう、よろしくお願い申し上げます。
                <br>
                万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。
                <br>
                今後ともご愛顧賜りますようよろしくお願い申し上げます。
            </p>
            <a href="<?php echo esc_url(home_url()); ?>" class="contact-confirm__button">TOPへ戻る</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>