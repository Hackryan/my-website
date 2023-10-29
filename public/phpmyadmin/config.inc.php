<?php
/**
 * phpMyAdmin sample configuration, you can use it as a base for
 * manual configuration. For easier setup, you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 */

declare(strict_types=1);

/**
 * This is needed for cookie-based authentication to encrypt the cookie.
 * Needs to be a 32-bytes long string of random bytes. See FAQ 2.10.
 */
$cfg['blowfish_secret'] = 'thisisnotrandomlgenerated4938w8d'; // Replace with a randomly generated key

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/**
 * phpMyAdmin configuration storage settings.
 */
$cfg['Servers'][$i]['controluser'] = 'root';  // Replace with the control user name
$cfg['Servers'][$i]['controlpass'] = 'root';  // Replace with the control user's password
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';  // Replace with the name of the phpMyAdmin configuration storage database
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';  // Replace with the appropriate table name
$cfg['Servers'][$i]['relation'] = 'pma__relation';  // Replace with the appropriate table name
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';  // Replace with the appropriate table name
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';  // Replace with the appropriate table name
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';  // Replace with the appropriate table name
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';  // Replace with the appropriate table name
$cfg['Servers'][$i]['history'] = 'pma__history';  // Replace with the appropriate table name
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';  // Replace with the appropriate table name
$cfg['Servers'][$i]['designer_coords'] = 'pma__designer_coords';  // Replace with the appropriate table name
$cfg['TempDir'] = '/home/interac/Desktop/Sarahish/.www/phpmyadmin/phpmyadmin_temp';

/**
 * End of servers configuration
 */

/**
 * Directories for saving/loading files from the server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/**
 * Additional Configuration Options
 */
// Uncomment and configure other settings as needed

/**
 * You can find more configuration options in the documentation
 * in the doc/ folder or at <https://docs.phpmyadmin.net/>.
 */
