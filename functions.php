<?php

// アイキャッチ画像有効化
add_theme_support( 'post-thumbnails' );

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



?>