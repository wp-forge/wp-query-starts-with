<?php

add_filter(
	'posts_where',
	function ( $where, WP_Query $query ) {
		global $wpdb;

		$starts_with = esc_sql( $query->get( 'starts_with' ) );

		if ( $starts_with ) {
			$where .= " AND {$wpdb->posts}.post_title LIKE '{$starts_with}%'";
		}

		return $where;
	},
	10,
	2
);
