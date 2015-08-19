<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
$config =array(
		"base_url" => "http://192.168.9.206/Test23/hybridauth/config.php", 
		"providers" => array ( 

			"Google" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "840693919682-v3sb1kq72ohn2fsjab3315topgq0b93m.apps.googleusercontent.com", "secret" => "An7PxH7rBQD-5wvLt6fMAzle" ), 
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "647891601997613", "secret" => "60834bc4fba72190d358856b1138cb22" ), 
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "bPS28JtY6aKx48uVSwX5d50bx", "secret" => "2ScSVJ4itkOKJ26nze5xaccifKC7y3hrje6MsIyKjohyiAOyyM" ) 
			),
		),
		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => true,
		"debug_file" => "debug.txt",
	);
