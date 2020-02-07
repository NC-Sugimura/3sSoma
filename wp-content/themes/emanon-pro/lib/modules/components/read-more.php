<?php
/**
* Read more
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$title_count = mb_strlen(get_the_title(),'utf-8');
	if ( $title_count > 26 ){ $end = '&#x2026;&#12301;';} else{ $end = '&#12301;';}
	
	switch ( get_emanon_read_more_type() ) {
		case 'read_more_post_title':
			echo '<div class="read-more"><a href="'. get_permalink() .'">&#12300;' . mb_substr(get_the_title(), 0 ,26 ) . $end . __( 'Read More of', 'emanon' ) . '</a></div>';
			break;
		default:
			echo '<div class="read-more"><a class="btn-border btn-mid" href="'. get_permalink() . '">' . __( 'Read More', 'emanon' ) . '<i class="fa fa-angle-right"></i></a></div>';
	}
?>