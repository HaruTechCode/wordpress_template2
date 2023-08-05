<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3 url=<?php echo esc_url(home_url("")); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header js-header">
      <div class="header__inner">
        <div class="header__logo">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/main_logo_gray.png")) ?>" alt="" class="header__logo-img">
        </div>
        <ul class="header__items lg-none">
          <li class="header__item">
            <a href="<?php echo esc_url(home_url()); ?>" class="header__link">top</a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('about')); ?>" class="header__link">about</a>
          </li>
          <li class="header__item">
            <a href="<?php echo esc_url(home_url('service')); ?>" class="header__link">service</a>
          </li>
          <li class="header__item">
            <a href="" class="header__link">works</a>
          </li>
          <li class="header__item">
            <a href="" class="header__link">news</a>
          </li>
          <li class="header__item">
            <a href="" class="header__contact">
              <img src="<?php echo esc_url(get_theme_file_uri("/images/mail-icon.svg")) ?>" alt="" class="header__contact-mail-icon">
              <div class="header__contact-text">contact</div>
            </a>
          </li>
        </ul>
      </div>
      <!-- <div class="header-logo-sp md-show">
        <img src="<?php echo esc_url(get_theme_file_uri("/images/main_logo_gray.png")) ?>" alt="">
      </div> -->
      <div class="hamburger js-hamburger lg-show">
          <span></span>
          <span></span>
          <span></span>
      </div>
      <div class="drawer-menu js-drawer">
        <div class="drawer-menu__inner">
          <ul class="drawer-menu__items">
            <li class="drawer-menu__item">
              <a href="" class="drawer-menu__link" >top</a>
            </li>
            <li class="drawer-menu__item">
              <a href="" class="drawer-menu__link" >about</a>
            </li>
            <li class="drawer-menu__item">
              <a href="" class="drawer-menu__link" >service</a>
            </li>
            <li class="drawer-menu__item">
              <a href="" class="drawer-menu__link" >works</a>
            </li>
            <li class="drawer-menu__item">
              <a href="" class="drawer-menu__link" >news</a>
            </li>
            <li class="drawer-menu__item">
              <a href="" class="drawer-menu__link" >contact</a>
            </li>
            <li class="drawer-menu__item">
              <a href="" class="drawer-menu__link" >プライバシーポリシー</a>
            </li>
          </ul>
          <div class="drawer-menu__sns sns-links">
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
      </div>
    </header>