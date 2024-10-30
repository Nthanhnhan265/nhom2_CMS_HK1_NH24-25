<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'silent' );
define( 'JETPACK_WAF_SHARE_DATA', false );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
define( 'JETPACK_WAF_DIR', 'C:\\wamp64-2\\www\\nhom2_CMS_HK1_NH24-25/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', 'C:\\wamp64-2\\www\\nhom2_CMS_HK1_NH24-25/wp-content/../wp-config.php' );
require_once 'C:\\wamp64-2\\www\\nhom2_CMS_HK1_NH24-25\\wp-content\\plugins\\jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
