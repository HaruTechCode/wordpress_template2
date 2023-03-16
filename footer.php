<footer class="footer">
    <div class="footer__contact">
        <img src="<?php echo esc_url(get_theme_file_uri("/images/contact_img.jpg")) ?>" alt="" class="footer__contact-img">
        <div class="footer__contact-body">
            <div class="footer__contact-body-inner">
                <p class="footer__contact-text">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</p>
                <!-- クリックできるようにすべきか -->
                <div class="footer__contact-button">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/mail-icon.svg")) ?>" alt="" class="footer__contact-mail-icon">
                    <!-- <img src="<?php echo esc_url(get_theme_file_uri("/images/mail-icon.svg")) ?>" alt="" class="footer__contact-mail-icon"> -->
                    <p class="footer__contact-button-text">お問い合わせ</p>
                </div>
                <div class="footer__contact-button">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/phone-icon.svg")) ?>" alt="" class="">
                    <!-- <img src="<?php echo esc_url(get_theme_file_uri("/images/phone-icon.svg")) ?>" alt="" class="footer__contact-phone-icon"> -->
                    <p class="footer__contact-button-text">0000-000-000</p>
                </div>
                <p class="footer__contact-small-text">受付時間 : 火曜日を除く 10：00〜18：00</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>