<?php

$settings['hash_salt'] = 'HASH_SALT';

// $conf['theme_debug'] = true;

// ini_set('memory_limit', '256M');

$databases['default']['default'] = array (
  'database' => 'DB_NAME',
  'username' => 'DEV_MYSQL_USER',
  'password' => 'DEV_MYSQL_PASS',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['trusted_host_patterns'] = array (
	'^FULL_SITE_URL$'
);
