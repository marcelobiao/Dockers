<?php
/**
 * Esse arquivo deverá ser colocado na pasta um nível
 * acima do docroot, por exemplo, no sismederi-vagrant,
 * o caminho é /var/www/config.php.
 */
return array(
    'APP_ENV' => 'dev',
    'LOGO_FOLDER' => '/utils/logos',
    'DB' => array(
        'host' => '172.17.0.1:3309',
        'user' => 'root',
        'pass' => '123',
        'dbname' => 'sismederi'
    ),
  /*  'DB' => array(
        'host' => 'de7c73be9d.undercloud.net',
        'user' => 'underweb',
        'pass' => '6FQR4ZZL',
        'dbname' => 'underweb_base'
    ),*/
    'obsequium_api' => array(
        'userId' => 1, // Mederi User ID in the Obsequium database
        'host' => 'http://0.0.0.0:8080',
        'user' => 'mederi_api',
        'pass' => 'foo',
        'active' => true,
    ),
    'sendgrid' => array(
        'key_name'	=> 'mederikey',
        'api_key'		=> 'e7I1GNWTTDeoHcjuzQy1Tg',
        'host' 			=> 'https://api.sendgrid.com/',
        'user' 			=> 'mederisender',
        'pass' 			=> 'mederi@2015',
    ),
    'queue' => array(
        'driver' => 'beanstalkd',
        'host'   => '127.0.0.1:11300',
        'name'   => 'default',
    ),
    'GS_FERIDAS_QUEUE'=> 'gcs.feridas.prd',
    'GS_EXAMES_QUEUE' => 'gcs.exames.prd',
    'GS_SCOPES'       => array('https://www.googleapis.com/auth/devstorage.read_write'),
    'GS_CLIENT_EMAIL' => '381781926511-98is2lvc8qtuoi393irpuphopdpobr9k@developer.gserviceaccount.com',
    'GS_BUCKET_NAME'  => 'splendid-window-88321',
    'GS_PUBLIC_DOMAIN'=> 'http://storage.googleapis.com',
    'GS_BUCKET'       => 'gs://splendid-window-88321/', # exemple: gs://splendid-window-88321/ (default: false)
    'SHELL_EXEC_USER' => 'vagrant',
    'TOKEN_HIPCHAT'   => 'jmbKFbz3gF2JdnA055zk1Mnmxm7zLKrPxD7k6oo0',
    'GAE_PRIVATE_KEY' => '/var/www/sismederi-prd-c5dcb0f78c39.p12'
);

