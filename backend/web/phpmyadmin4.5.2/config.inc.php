<?php

/* Servers configuration */
$i = 0;

$cfg['blowfish_secret'] = 'a8b7c6d'; //What you want

/* Server: localhost [1] */
$i++;
$cfg['Servers'][$i]['verbose'] = 'Local Databases';
$cfg['Servers'][$i]['host'] = '127.0.0.1';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = '';
$cfg['Servers'][$i]['password'] = '';

// Hidden databases in PhpMyAdmin left panel
// $cfg['Servers'][$i]['hide_db'] = '(information_schema|mysql|performance_schema|sys)';

// Allow connection without password
$cfg['Servers'][$i]['AllowNoPassword'] = true;

// Suppress Warning about pmadb tables
$cfg['PmaNoRelation_DisableWarning'] = true;

// To have PRIMARY & INDEX in table structure export
$cfg['Export']['sql_drop_table'] = true;
$cfg['Export']['sql_if_not_exists'] = true;

$cfg['MySQLManualBase'] = 'http://dev.mysql.com/doc/refman/5.7/en/';
/* End of servers configuration */

?>