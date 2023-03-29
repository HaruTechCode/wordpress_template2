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
        <a href="#about-philosophy" class="page-nav-link">経営理念</a>
        <a href="#about-access" class="page-nav-link">アクセス</a>
        <a href="#about-company-profile" class="page-nav-link">会社概要</a>
    </div>
    <div class="page-top">
        <div class="page-top__inner">
            <p class="page-top__title">国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを</p>
            <p class="page-top__text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</p>
        </div>
    </div>

    <section class="about-philosophy" id="about-philosophy">
        <div class="about-philosophy__inner inner">
            <div class="about-philosophy__body">
                <h2 class="about-philosophy__heading page-section-heading">
                    <span class="page-section-heading__sub">経営理念</span>
                    <span class="page-section-heading__main">Philosophy</span>
                </h2>
                <p class="about-philosophy__text">「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。<br>そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。<br>心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。<br>我々は現状に満足することなく挑戦し続けます。</p>
                <p class="about-philosophy__signature">代表取締役　田中太郎</p>
            </div>
            <div class="about-philosophy__img">
                <picture>
                    <source srcset="<?php echo esc_url(get_theme_file_uri("/images/philosophy.jpg")) ?>" media="(min-width: 769px)">
                    <img src="<?php echo esc_url(get_theme_file_uri("/images/philosophy-sp.jpg")) ?>" alt="">
                </picture>
            </div>
        </div>
    </section>
    <section class="about-access" id="about-access">
        <div class="about-access__inner inner">
            <h2 class="about-access__heading page-section-heading">
                <span class="page-section-heading__sub">アクセス</span>
                <span class="page-section-heading__main">Access</span>
            </h2>
            <p class="about-access__address">
                <span class="about-access__address-number">〒000-0000</span>
                <span class="about-access__address-main">〇〇県△△市□□区▲▲町0-0-0</span>
            </p>
            <div class="about-access__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12963.215807428884!2d139.76691!3d35.681829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1679793733606!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <section class="about-company-profile" id="about-company-profile">
        <div class="about-company-profile__inner inner">
            <h2 class="about-company-profile__heading page-section-heading">
                <span class="page-section-heading__sub">会社概要</span>
                <span class="page-section-heading__main">Company Profile</span>
            </h2>
            <dl class="about-company-profile__dl">
                <dt class="about-company-profile__dt">会社名</dt>
                <dd class="about-company-profile__dd">株式会社Excitecode</dd>
                <dt class="about-company-profile__dt">所在地</dt>
                <dd class="about-company-profile__dd">〒000-0000  〇〇県△△市□□区▲▲町0-0-0</dd>
                <dt class="about-company-profile__dt">設立</dt>
                <dd class="about-company-profile__dd">2015年12月10日</dd>
                <dt class="about-company-profile__dt">代表取締役</dt>
                <dd class="about-company-profile__dd">田中　太郎</dd>
                <dt class="about-company-profile__dt">事業内容</dt>
                <dd class="about-company-profile__dd">
                    <p>自動車販売（新車、中古車）古物No.第00000000号</p>
                    <p>自動車整備（国産車、輸入車）陸運局認証工場　認証No.0-0000</p>
                    <p>輸入車販売（自動車、自動車関連部品）</p>
                    <p>保険代理店（ABC損害保険株式会社、DFG損害保険株式会社）</p>
                </dd>
            </dl>
        </div>
    </section>

    <div class="about-flow-slider">
        <ul class="js-flow-slider">
            <li><img src="<?php echo esc_url(get_theme_file_uri("/images/flow-slider01.jpg")) ?>" alt="" class=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri("/images/flow-slider02.jpg")) ?>" alt="" class=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri("/images/flow-slider03.jpg")) ?>" alt="" class=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri("/images/flow-slider04.jpg")) ?>" alt="" class=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri("/images/flow-slider05.jpg")) ?>" alt="" class=""></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri("/images/flow-slider06.jpg")) ?>" alt="" class=""></li>
        </ul>
    </div>
</main>
<?php get_footer(); ?>