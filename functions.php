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

function custom_search($search, $wp_query) {
    global $wpdb;

    if (!$wp_query->is_search)
        return $search;
    if (!isset($wp_query->query_vars))
        return $search;

    $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
    $field_types = $_GET['field_type'];
    $field_types = array_map('esc_sql', $field_types);
    $field_type_text = isset($field_types) ? "('" . implode("' , '", $field_types) . "')" : "(null)";
    if ( count($search_words) > 0 ) {
        $search = '';
        $search .= "AND post_type = 'works'";
        foreach ( $search_words as $word ) {
            if ( !empty($word) ) {
                $search_word = '%' . esc_sql( $word ) . '%';
                $search .= " AND (
                     {$wpdb->posts}.post_title LIKE '{$search_word}'
                    OR {$wpdb->posts}.post_content LIKE '{$search_word}'
                    OR {$wpdb->posts}.ID IN (
                    SELECT distinct post_id
                    FROM {$wpdb->postmeta}
                    WHERE meta_value LIKE '{$search_word}' AND
                    meta_key IN {$field_type_text}
                    )
                ) ";
            }
        }
    }
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);
