<?php

if (!defined('SMF'))
	die('You dont belong here...');

global $smcFunc;

db_extend('packages');

$smcFunc['db_add_column']('{db_prefix}membergroups', 
	array(
		'name' => 'group_prefix', 'type' => 'tinytext', 'null' => 'not null',
	), '', 'ignore', '');
	
?>