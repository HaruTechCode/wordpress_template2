<footer class="footer">
    <div class="footer__contact">
        <div class="footer__contact-img">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/contact_img.jpg")) ?>" alt="" >
        </div>
        <div class="footer__contact-body">
            <p class="footer__contact-text">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</p>
            <!-- クリックできるようにすべきか お問い合わせボタンはホバーすると、色を反転 -->
            <div class="footer__contact-button">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/mail-icon.svg")) ?>" alt="" class="footer__contact-mail-icon">
                <p class="footer__contact-button-text">お問い合わせ</p>
            </div>
            <div class="footer__contact-button">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/phone-icon.svg")) ?>" alt="" class="">
                <p class="footer__contact-button-text">0000-000-000</p>
            </div>
            <p class="footer__contact-small-text">受付時間 : 火曜日を除く 10：00〜18：00</p>
        </div>
    </div>
    <div class="footer__main">
        <div class="footer__main-body">
            <div class="footer__logos">
                <div class="footer__logo">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/main_logo_navy.png")) ?>" alt="" class="">
                </div>
                <div class="footer__sns-icons">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/facebook_icon.svg")) ?>" alt="" class="footer__sns-icon">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/twitter_icon.svg")) ?>" alt="" class="footer__sns-icon">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/instagram_icon.svg")) ?>" alt="" class="footer__sns-icon">
                </div>
            </div>
            <small class="footer__copyright">©2022 ExciteCode Automobile</small>
        </div>
        <div class="footer__links">
            <ul class="footer-links">
                <li class="footer-link"><a href="" class="footer-link__link">top</a></li>
                <li class="footer-link"><a href="" class="footer-link__link">about</a></li>
                <li class="footer-link"><a href="" class="footer-link__link">service</a></li>
                <li class="footer-link"><a href="" class="footer-link__link">works</a></li>
                <li class="footer-link"><a href="" class="footer-link__link">news</a></li>
                <li class="footer-link"><a href="" class="footer-link__link">contact</a></li>
                <li class="footer-link"><a href="" class="footer-link__link">プライバシーポリシー</a></li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>