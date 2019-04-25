<?php
/*
 * Plugin Name: Anonymize IPs
 * Plugin URI: https://github.com/drebs/YOURLS-anonymize-ips
 * Description: Replace all recorded IPs by 127.0.0.1
 * Version: 1.0
 * Author: drebs
 * Author URI: https://github.com/drebs
 * */

yourls_add_filter( 'shunt_check_IP_flood', function( $v ) { return true; } );
yourls_add_filter( 'get_IP', function( $v ) { return '127.0.0.1'; } );
