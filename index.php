<?php
ini_set('session.use_only_cookies' , 0); //session.use_only_cookies was = 1
ini_set('register_long_arrays' , 1);  // was Off
ini_set('always_populate_raw_post_data' , 0); //was 1
ini_set('magic_quotes_gpc' , 1);

//session.use_trans_sid was = 0

//phpinfo(); die();
/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */

/**
 * Root directory of Drupal installation.
 */
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
menu_execute_active_handler();
