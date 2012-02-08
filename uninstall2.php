<?php

if (!defined('SMF'))
	die('Hacking attempt...');

global $smcFunc;

db_extend('packages');

$smcFunc['db_remove_column']('{db_prefix}membergroups', 'group_prefix', '', '');

?>