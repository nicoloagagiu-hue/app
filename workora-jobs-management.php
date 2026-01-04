<?php
/**
 * Plugin Name: Workora JOBS Management
 * Description: Job matching con modello Pay-per-Contact individuale (WooCommerce).
 * Version: 1.0.0
 * Author: Greenmarketing
 * Text Domain: workora-jobs
 * Domain Path: /languages
 * Requires Plugins: woocommerce
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'WORKORA_JOBS_VERSION', '1.0.0' );
define( 'WORKORA_JOBS_PATH', plugin_dir_path( __FILE__ ) );
define( 'WORKORA_JOBS_URL', plugin_dir_url( __FILE__ ) );
define( 'WORKORA_JOBS_TEXTDOMAIN', 'workora-jobs' );

define( 'WORKORA_UNLOCK_PRODUCT_ID', 13 ); // Prodotto WooCommerce “Sblocca Contatto (5€)”

define( 'WORKORA_ROLE_STUDENT', 'student' );
define( 'WORKORA_ROLE_COMPANY', 'company' );

define( 'WORKORA_META_UNLOCKED_STUDENTS', '_workora_unlocked_students' ); // user_meta (company)
define( 'WORKORA_CART_KEY_STUDENT_ID', 'workora_student_id' );

define( 'WORKORA_STUDENT_META_PHONE', '_workora_phone' );
define( 'WORKORA_STUDENT_META_DOB', '_workora_dob' );
define( 'WORKORA_STUDENT_META_EDU', '_workora_education' );
define( 'WORKORA_STUDENT_META_EXP', '_workora_experience' );
define( 'WORKORA_STUDENT_META_SKILLS', '_workora_skills' );

define( 'WORKORA_NONCE_ACTION', 'workora_jobs_nonce_action' );
define( 'WORKORA_NONCE_NAME', 'workora_jobs_nonce' );

define( 'WORKORA_DISABLE_WC_ROLE_FIELD', true ); // usa pagina registrazione custom [workora_register]

// Autoloader semplice
require_once WORKORA_JOBS_PATH . 'includes/class-workora-jobs-loader.php';

function workora_jobs_boot() {
    $loader = new Workora_Jobs_Loader();
    $loader->init();
}
add_action( 'plugins_loaded', 'workora_jobs_boot' );

/**
 * ============================================================================
 * FILE STRUCTURE
 * ============================================================================
 * workora-jobs-management.php
 * /includes/
 *   class-workora-jobs-loader.php
 *   class-workora-jobs-i18n.php
 *   class-workora-jobs-roles.php
 *   class-workora-jobs-cpt.php
 *   class-workora-jobs-assets.php
 *   class-workora-jobs-shortcodes.php
 *   class-workora-jobs-student.php
 *   class-workora-jobs-company.php
 *   class-workora-jobs-woo.php
 *   class-workora-jobs-security.php
 *   class-workora-jobs-applications.php
 *   class-workora-jobs-profile.php
 *   helpers.php
 * /templates/
 *   registration.php
 *   student-dashboard.php
 *   company-dashboard.php
 *   public-profile.php
 * /languages/
 */
