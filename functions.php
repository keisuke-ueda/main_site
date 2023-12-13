<?php



// アイキャッチ画像有効化

add_theme_support( 'post-thumbnails' );



/*【出力カスタマイズ】検索結果のタイトルをカスタマイズ */

function wp_search_title($search_title){

    if(is_search()){

      $search_title = '「'.get_search_query().'」の検索結果';

    }

    return $search_title;

}

add_filter('wp_title','wp_search_title');





// デザイン投稿

function create_post_design() {

    $exampleSupports = [

        'title',

        'editor',

        'thumbnail',

        'revisions'

    ];

    register_post_type( 'disigns',

        array(

        'label' => 'デザイン',

        'public' => true,

        'has_archive' => true,

        'menu_position' => 5,

        'menu_icon' => 'dashicons-admin-appearance',

        'supports' => $exampleSupports

        ) 

        );

}

add_action('init', 'create_post_design');



// デザインタクソノミ

function add_design_taxonomy(){

    register_taxonomy( 

        'disigns-category',

        'disigns',

        array(

            'label' => 'カテゴリー',

            'hierarchical' => true,

            'public' => true,

        )

    );

    register_taxonomy(

        'designs-tag',

        'disigns',

        array(

            'label' => 'タグ',

            'hierarchical' => true,

            'public' => true,

        )

        );

}

add_action( 'init','add_design_taxonomy');





// ニュース投稿

function create_post_news() {

    $exampleSupports = [

        'title',

        'editor',

        'thumbnail',

        'revisions'

    ];

    register_post_type( 'news',

        array(

        'label' => 'ニュース',

        'public' => true,

        'has_archive' => true,

        'menu_position' => 5,

        'menu_icon' => 'dashicons-info-outline',

        'supports' => $exampleSupports

        ) 

        );

}

add_action('init', 'create_post_news');



// ニュースタクソノミ

function add_news_taxonomy(){

    register_taxonomy( 

        'news-category',

        'news',

        array(

            'label' => 'カテゴリー',

            'hierarchical' => true,

            'public' => true,

        )

    );

    register_taxonomy(

        'news-tag',

        'news',

        array(

            'label' => 'タグ',

            'hierarchical' => true,

            'public' => true,

        )

        );

}

add_action( 'init','add_news_taxonomy');





// Youtube投稿

function create_post_youtube() {

    $exampleSupports = [

        'title',

        'editor',

        'thumbnail',

        'revisions'

    ];

    register_post_type( 'youtube',

        array(

        'label' => 'youtube',

        'public' => true,

        'has_archive' => true,

        'menu_position' => 5,

        'menu_icon' => 'dashicons-video-alt3',

        'supports' => $exampleSupports

        ) 

        );

}

add_action('init', 'create_post_youtube');



// youtubeタクソノミ

function add_youtube_taxonomy(){

    register_taxonomy( 

        'youtube-category',

        'youtube',

        array(

            'label' => 'カテゴリー',

            'hierarchical' => true,

            'public' => true,

        )

    );

    register_taxonomy(

        'youtube-tag',

        'youtube',

        array(

            'label' => 'タグ',

            'hierarchical' => true,

            'public' => true,

        )

        );

}

add_action( 'init','add_youtube_taxonomy');





// 投稿の一覧表示有効

function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {

      $args['rewrite'] = true;

      $args['has_archive'] = 'archive'; //URLとして使いたい文字列

    }

    return $args;

  }

  add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );



