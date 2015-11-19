<?php
# Database Configuration
define( 'DB_NAME', 'wp_ivsn' );
define( 'DB_USER', 'ivsn' );
define( 'DB_PASSWORD', 'GqjcWFKxzZg3Xnk8' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY', 'W~XqQfX*rfz*zm1}or@@LX?+c)Wc7CR@9Di;z.odoEUOxqT9AKsbd{01R$q;EUS6');
define('SECURE_AUTH_KEY', ')-acZ|H=h`N;9JdmM*JnZCjO)(]XT$6@4-|_+o|-++ey+;m-k+LN,5zI+~DUPHUF');
define('LOGGED_IN_KEY', 'ZHF}eg7qiDw|^r^I`A@e@qHuv^~E~CriPUL8Ezcm+#*PaDJFUJ/TR^H9). oUTro');
define('NONCE_KEY', 'I4LTwoGx`y:M)EO:{1/+@6Nbx8db`P<pSNg+kpQ$4}w*rU%2vsPG|`kk_O-Y)npe');
define('AUTH_SALT',        ': +g66)wq@ eB@&.Cq-mm~([RK]Uc7l$Bkr.eWW!rUNpxh. Jt1RVQp~H[/)Hp*1');
define('SECURE_AUTH_SALT', '@<$,>ljX0/+>Qh#2bk&Nv#MTQW$XV2L_s3!],m5n]+%s[jivls7iBH^>qDg[-Q|,');
define('LOGGED_IN_SALT',   '$jK^fbbLlqf)w+xN0<-k>;Y2l5pm5G#G>Cw>H(8SiDQc Buy j{1quMkLW,v}1z7');
define('NONCE_SALT',       '%Y+rvvJt.|aXz*AsQyeT,Sxr|cISWTfK*g fTl[+=CkMF|_$?lT-8ycm6m-?u=m<');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'PWP_NAME', 'ivsn' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '9df04aec6c9728aa6cc6479f989378ade4b95978' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '41163' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'www.ivsn.org', 1 => 'ivsn.org', 2 => 'ivsn.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-41163', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_AUTO_UPDATE_CORE', false );

$wpe_special_ips=array ( 0 => '45.79.136.153', );

$wpe_netdna_domains_secure=array ( );

define( 'WPE_CACHE_TYPE', 'generational' );

define( 'WPE_LBMASTER_IP', '45.79.136.153' );

define( 'WPE_SFTP_PORT', 2222 );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
