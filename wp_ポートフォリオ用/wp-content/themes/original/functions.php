<?php
/*
Must put original on head of function name
*/
if ( ! function_exists( 'original_setup' ) ) :

/**
 * sets up theme defaults and registers support for various WordPress features.
 */
function original_setup(){

	// defaut posts and coments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Enable support for post thumbnails on posts and pages
	add_theme_support( 'post-thumnails' );

	// set wp_nav_menu()
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary' ),
	) );

	// change default core markup for them to output valid HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif;
add_action( 'after_setup_theme', 'original_setup' );
/*カスタム投稿*/
function create_post_type() {
  $exampleSupports = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type('information',  // カスタム投稿名
    array(
      'label' => 'お知らせ',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックします
/*サムネイル*/
add_theme_support( 'post-thumbnails' );
/*info投稿表示*/
