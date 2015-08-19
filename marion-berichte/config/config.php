<?php

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'Berichte' => array
	(
		'tables' => array('tl_Berichte', 'tl_Berichte_song'),
		'icon'   => 'system/modules/marion-berichte/assets/icon.png'
	)
));


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['miscellaneous']['bericht_list']   = 'ModuleBerichtList';
$GLOBALS['FE_MOD']['miscellaneous']['bericht_reader'] = 'ModuleBerichtReader';


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_berichte']      = 'BerichtModel';
