wp.domReady( function() {

	// カバーブロック
	wp.blocks.registerBlockStyle( 'core/cover', {
		name: 'lpheight',
		label: '高さをアレンジ'
	} );

	// 見出しブロック
	wp.blocks.registerBlockStyle( 'core/heading', {
		name: 'lpshadow',
		label: '影をつける'
	} );

	// 段落ブロック
	wp.blocks.registerBlockStyle( 'core/paragraph', {
		name: 'lpshadow',
		label: '影をつける'
	} );

	// カラムブロック
	wp.blocks.registerBlockStyle( 'core/columns', {
		name: 'lpconcepts',
		label: 'コンセプト'
	} );

	// StackableのPostsブロック
	wp.blocks.registerBlockStyle( 'ugb/blog-posts', {
		name: 'lpposts',
		label: '最新記事'
	} );

	// メディアと文章ブロック
	wp.blocks.registerBlockStyle( 'core/media-text', {
		name: 'lpmedia',
		label: '高さアレンジ（カラム塗りつぶし）'
	} );

	wp.blocks.registerBlockStyle( 'core/media-text', {
		name: 'lpcard',
		label: 'カード型'
	} );

} );
