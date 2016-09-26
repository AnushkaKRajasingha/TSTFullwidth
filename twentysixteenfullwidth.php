<?php
/**
 * Plugin Name: Twenty Sixteen Full Width
 * Plugin URI: http://www.anushkar.com/plugins/twentysixteenfullwidth/
 * Description: The custom wordpress plugin to make twenty sixteen theme full width
 * Version: 1.0.0
 * Db Version: 1.0.0
 * Db Remove: No
 * Author: Anushka K R
 * Author URI: http://www.anushkar.com/
 * License: twentysixteenfullwidth
 * Text Domain: twentysixteenfullwidth
 * Icon URL: icon.png
 * License Srv Url: http://www.anushkar.com/plugins/twentysixteenfullwidth/license
 * License Secert: RGVtbyBMaWNlbnNl
 * UserDocumentation: http://www.anushkar.com/plugins/twentysixteenfullwidth/UserDocumentation
 * DevDocumentation:  http://www.anushkar.com/plugins/twentysixteenfullwidth/DevDocumentation
 * HelpAndSupport: http://www.anushkar.com/plugins/twentysixteenfullwidth/HelpAndSupport
 * Environment: Live
 *
 *
 * Change Log:
 * 0.0.0 - Under Development
 * 1.0.0 - First Release
 *  */

$default_headers = array(
		'Name' => 'Plugin Name',
		'PluginURI' => 'Plugin URI',
		'Version' => 'Version',
		'Description' => 'Description',
		'Author' => 'Author',
		'AuthorURI' => 'Author URI',
		'TextDomain' => 'Text Domain',
		'DomainPath' => 'Domain Path',
		'Network' => 'Network',
		// Site Wide Only is deprecated in favor of Network.
		'_sitewide' => 'Site Wide Only',
		'PluginIcon' => 'Icon URL',
		'DBVersion' => 'Db Version',
		'DbRemove' => 'Db Remove',
		'LICENSE_SERVER_URL' => 'License Srv Url',
		'LICENSE_SECRET' => 'License Secert',
		'UserDoc'	=> 'UserDocumentation',
		'DevDoc' => 'DevDocumentation',
		'HelpSup' => 'HelpAndSupport',
		'Environment' => 'Environment'
);

$_plugindata = get_file_data(__FILE__,$default_headers) ;


function Twenty_Sixteen_fullwidth_scripts() {
	$dir = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'tsfw-style',$dir.'css/style.css',array(),$_plugindata['Version'],'all');
}

add_action( 'wp_enqueue_scripts', 'Twenty_Sixteen_fullwidth_scripts' );