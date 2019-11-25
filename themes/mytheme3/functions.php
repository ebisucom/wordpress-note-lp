<?php

// 基本設定
function mytheme_setup() {

	// ページのタイトルを出力
	add_theme_support( 'title-tag' );

	// HTML5対応
	add_theme_support( 'html5', array( 'style', 'script' ) );	

	// アイキャッチ画像
	add_theme_support( 'post-thumbnails' );

	// ナビゲーションメニュー
	register_nav_menus( array(
		'primary' => 'メイン',
	) );

	// 編集画面用のCSS
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );

	// グーテンベルク由来のCSS（theme.min.css）
	add_theme_support( 'wp-block-styles' );

	// 埋め込みコンテンツのレスポンシブ化
	add_theme_support( 'responsive-embeds' );

	// 幅広・全幅
	add_theme_support( 'align-wide' );

}
add_action( 'after_setup_theme', 'mytheme_setup' );


// ウィジェット
function mytheme_widgets() {

	register_sidebar( array(
		'id' => 'sidebar-1',
		'name' => 'サイドメニュー',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );

}
add_action( 'widgets_init', 'mytheme_widgets' );


// CSS
function mytheme_enqueue() {

	//Font Awesome
	wp_enqueue_style( 'mytheme-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), null );

	//Google Fonts
	wp_enqueue_style( 'mytheme-googlefonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,800', array(), null );

	//テーマのCSS
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );

}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue' );


// Font Awesomeの属性
function mytheme_sri( $html, $handle ) {
	if ( $handle === 'mytheme-fontawesome' ) {
		return str_replace(
			'/>',
			'integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"' . ' />',
			$html 
		);
	}
	return $html;
}
add_filter( 'style_loader_tag', 'mytheme_sri', 10, 2);


// フロントとエディタの両方に適用するCSS
function mytheme_both() {

	wp_enqueue_style(
		'mytheme-style-both', 
		get_template_directory_uri() . '/style-both.css', 
		array(),
		filemtime( get_template_directory() . '/style-both.css' )
	);

}
add_action( 'enqueue_block_assets', 'mytheme_both' );


// ブロックスタイル
function myjs_enqueue() {

	wp_enqueue_script( 
		'myjs-style',
		get_template_directory_uri() . '/mystyle.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		filemtime( get_template_directory() . '/mystyle.js' )
    );

}
add_action( 'enqueue_block_editor_assets', 'myjs_enqueue' );
