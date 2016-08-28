
$config_directories[CONFIG_SYNC_DIRECTORY] = '../config/dev';
$config_directories['dev'] = '../config/dev';

$settings['install_profile'] = 'standard';

$databases['default']['default'] = array (
  'database' => 'db',
  'username' => 'user',
  'password' => 'pass',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$local_settings = dirname(__FILE__) . '/settings.local.php';

if (file_exists($local_settings)) {
  include $local_settings;
}