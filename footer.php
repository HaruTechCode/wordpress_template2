<footer class="footer">
    <div class="footer__contact">
        <div class="footer__contact-img">
            <img src="<?php echo esc_url(get_theme_file_uri("/images/contact_img.jpg")) ?>" alt="" >
        </div>
        <div class="footer__contact-body">
            <p class="footer__contact-text">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</p>
            <a class="footer__contact-button background-flow-left" href="<?php echo esc_url(home_url('contact')); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17.6" viewBox="0 0 22 17.6" class="background-flow-left__img">
                    <path id="Icon_material-mail-outline" data-name="Icon material-mail-outline" d="M22.8,6H5.2A2.2,2.2,0,0,0,3.011,8.2L3,21.4a2.206,2.206,0,0,0,2.2,2.2H22.8A2.206,2.206,0,0,0,25,21.4V8.2A2.206,2.206,0,0,0,22.8,6Zm0,15.4H5.2v-11L14,15.9l8.8-5.5ZM14,13.7,5.2,8.2H22.8Z" transform="translate(-3 -6)" fill="#fff"/>
                </svg>
                <p class="footer__contact-button-text background-flow-left__text">お問い合わせ</p>
            </a>
            <a href="tel:0000-000-000" class="footer__contact-button">
                <img src="<?php echo esc_url(get_theme_file_uri("/images/phone-icon.svg")) ?>" alt="" class="">
                <p class="footer__contact-button-text">0000-000-000</p>
            </a>
            <p class="footer__contact-small-text">受付時間 : 火曜日を除く 10：00〜18：00</p>
        </div>
    </div>
    <div class="footer__main">
        <div class="footer__main-body">
            <div class="footer__logos">
                <div class="footer__logo">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/main_logo_navy.png")) ?>" alt="" class="">
                </div>
                <div class="footer__sns-icons sns-links">
                    <a href="" class="sns-links__item sns-link">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/facebook_icon.svg")) ?>" alt="" class="">
                    </a>
                    <a href="" class="sns-links__item sns-link sns-link--twitter">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/twitter_icon.svg")) ?>" alt="" class="">
                    </a>
                    <a href="" class="sns-links__item sns-link">
                        <img src="<?php echo esc_url(get_theme_file_uri("/images/instagram_icon.svg")) ?>" alt="" class="">
                    </a>
                </div>
            </div>
            <small class="footer__copyright">©2022 ExciteCode Automobile</small>
        </div>
        <div class="footer__links">
            <ul class="footer-links">
                <li class="footer-link"><a href="<?php echo esc_url(home_url()); ?>" class="footer-link__link">top</a></li>
                <li class="footer-link"><a href="<?php echo esc_url(home_url('about')); ?>" class="footer-link__link">about</a></li>
                <li class="footer-link"><a href="<?php echo esc_url(home_url('service')); ?>" class="footer-link__link">service</a></li>
                <li class="footer-link"><a href="<?php echo esc_url(home_url('works')); ?>" class="footer-link__link">works</a></li>
                <li class="footer-link"><a href="<?php echo esc_url(home_url('news')); ?>" class="footer-link__link">news</a></li>
                <li class="footer-link"><a href="<?php echo esc_url(home_url('contact')); ?>" class="footer-link__link">contact</a></li>
                <li class="footer-link"><a href="<?php echo esc_url(home_url('privacy_policy')); ?>" class="footer-link__link">プライバシーポリシー</a></li>
            </ul>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>