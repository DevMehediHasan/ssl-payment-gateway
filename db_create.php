<?php

global $order_db_version;
$order_db_version = '1.0';

function order_db() {
	global $wpdb;
	global $order_db_version;

	$table_name = $wpdb->prefix . 'order';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		name tinytext NOT NULL,
		email varchar(100) NOT NULL,
		phone varchar(55) NOT NULL,
		amount double NOT NULL,
		address text NOT NULL,
		status varchar(55) NOT NULL,
		transaction_id varchar(100) NOT NULL,
		currency varchar(55) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'order_db_version', $order_db_version );
}

global $ssl_db_version;
$ssl_db_version = '1.0';

function ssl_db() {
	global $wpdb;
	global $ssl_db_version;

	$table_name = $wpdb->prefix . 'ssl_config';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL,
		store_id varchar(255) NOT NULL,
		store_pass varchar(255) NOT NULL,
		is_sandbox varchar(55) NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'ssl_db_version', $ssl_db_version );
}

function ssl_config_data() {
	global $wpdb;
	
	$wp_id = 1;
	$wp_store_id = 'taxol5c7cf3257d623@ssl';
	$wp_store_pass = 'taxol5c7cf3257d623';
	$wp_is_sandbox = true;
	
	$table_name = $wpdb->prefix . 'ssl_config';
	
	$wpdb->insert( 
		$table_name, 
		array( 
			'id' => $wp_id, 
			'store_id' => $wp_store_id, 
			'store_pass' => $wp_store_pass, 
			'is_sandbox' => $wp_is_sandbox,
		) 
	);
}