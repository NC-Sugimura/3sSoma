<?php
/**
* Theme add page
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

/*------------------------------------------------------------------------------------
/* 固定ページ 初期設定
/*----------------------------------------------------------------------------------*/
//テーマ適用時に自動で固定ページ生成
function create_pages_setting() {

add_option( 'company_page', 'page_create');
	if ( get_page_by_path ( 'company' ) === null && get_option ('company_page' ) === 'page_create' ) {
	wp_insert_post (
		array(
		'post_title'	 => '会社概要',
		'post_name'		 => 'company',
		'post_status'	 => 'draft',
		'post_type'		 => 'page',
		'post_content' => '<table>
			<tbody>
			<tr>
				<th>社名</th>
				<td>社名・屋号を入力</td>
			</tr>
			<tr>
				<th>所在地</th>
				<td>〒000-0000<br>都道府県市区町村</td>
			</tr>
			<tr>
				<th>代表者</th>
				<td>氏名を入力</td>
			</tr>
			<tr>
				<th>設立</th>
				<td>0000年00月00日</td>
			</tr>
			<tr>
				<th>事業内容</th>
				<td>事業内容を入力</td>
			</tr>
			<tr>
				<th>連絡先</th>
				<td>Tel：00-0000-0000</td>
			</tr>
			<tr>
				<th>取引先 業種</th>
				<td>取引先の企業名や業種を入力</td>
			</tr>
			</tbody>
		</table>',
		)
	);
update_option( 'company_page', 'page_created' );
}

add_option( 'law_page', 'page_create' );
	if ( get_page_by_path( 'law' ) === null && get_option( 'law_page ') === 'page_create' ) {
		wp_insert_post(
		array(
		'post_title'	 => '特定商取引法に基づく表記',
		'post_name'		 => 'law',
		'post_status'	 => 'draft',
		'post_type'		 => 'page',
		'post_content' => '<tbody>
			<table>
			<tr>
				<th>販売元</th>
				<td>社名・屋号を入力</td>
			</tr>
			<tr>
				<th>運営責任者</th>
				<td>氏名を入力</td>
			</tr>
			<tr>
				<th>所在地</th>
				<td>〒000-0000<br>都道府県市区町村</td>
			</tr>
			<tr>
				<th>連絡先</th>
				<td>連絡先電話番号・営業時間を入力</td>
			</tr>
			<tr>
				<th>販売価格</th>
				<td>役務の対価を入力（送料も記載)</td>
			</tr>
			<tr>
				<th>商品代金支払方法と時期</th>
				<td>支払方法を入力<br>支払時期を入力</td>
			</tr>
			<tr>
				<th>役務または商品の引渡時期</th>
				<td>注文後、役務の提供が開始する時期、商品が元へ届く時期を入力</td>
			</tr>
			<tr>
				<th>返品・不良品</th>
				<td>返品の可否を入力</td>
			</tr>
			</tbody>
		</table>',
		)
	);
update_option( 'law_page', 'page_created');
}

}
add_action( 'after_setup_theme', 'create_pages_setting' );