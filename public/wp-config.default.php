<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 * 
 * Please note if you add constants in this file (i.e. define statements) 
 * these cannot be overridden in environment config files.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
  

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!gxZLPG1T-Ch3dmmL#x*');
define('SECURE_AUTH_KEY',  'Sd%FI4nXPMUaF!n$ggnG');
define('LOGGED_IN_KEY',    'HH/6253K%gBK(ZFId_Fs');
define('NONCE_KEY',        '!yw c5! V5LNgG-A9sp0');
define('AUTH_SALT',        'c@T$Ta=fGQPGZTr2EIKJ');
define('SECURE_AUTH_SALT', 'EC2pc0KR#5IENIY%qRFy');
define('LOGGED_IN_SALT',   '/8KFwBtfMWrXAbhIEpyt');
define('NONCE_SALT',       'mqJYP$NJFytA_qVtZ)21');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_75frmthsk5_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
