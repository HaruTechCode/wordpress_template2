<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{
    //使用フォント
    //日本語：Noto Sans JP Medium/Regular/Bold
    //英語：Oswald Bold/Roboto Regular
    //header・footer：Roboto Medium
    wp_enqueue_style( 'google-font-noto', "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Oswald:wght@700&family=Roboto:wght@400;500&display=swap", [], null);

  // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', "", "1.0.1", true);
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ["jquery"], null, true);
    wp_enqueue_script('inview', get_template_directory_uri() . '/js/jquery.inview.min.js', ["jquery"], null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/script.js', ['jquery', 'inview'], '1.0.1', true);
    wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.1');
    wp_enqueue_style('slick-theme', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css", [], null);
    wp_enqueue_style('slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css", [], null);

}

add_action('wp_enqueue_scripts', 'my_script_init');

function my_wp_head()
{
    echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">';
    echo '<link rel="shortcut icon" href="' . esc_url(get_theme_file_uri("/images/favicon.png")) . '">';
}
add_action("wp_head", "my_wp_head");

function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ニュース';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}

function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ニュース';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}

add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

function bc_limit($trail)
{
  if (mb_strlen($trail->breadcrumbs[0]->get_title()) > 10) {
    $trail->breadcrumbs[0]->set_title(mb_substr($trail->breadcrumbs[0]->get_title(), 0, 11) . '...');
  }
}
add_action('bcn_after_fill', 'bc_limit');