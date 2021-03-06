<?php
/**
 * Bootstrap the plugin unit testing environment.
 */

// Activates this plugin in WordPress so it can be tested.
$GLOBALS['wp_tests_options'] = array(
	'active_plugins' => array( 'formidable/formidable.php' ),
);

// If the develop repo location is defined (as WP_DEVELOP_DIR), use that
// location. Otherwise, we'll just assume that this plugin is installed in a
// WordPress develop SVN checkout.

if( false !== getenv( 'WP_DEVELOP_DIR' ) ) {
	require getenv( 'WP_DEVELOP_DIR' ) . '/tests/phpunit/includes/bootstrap.php';
} else {
	require '../../../../tests/phpunit/includes/bootstrap.php';
}
