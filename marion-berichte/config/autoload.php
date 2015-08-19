<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'Contao\BerichtModel'        => 'system/modules/marion-berichte/models/BerichtModel.php',
	'Contao\CdModel'             => 'system/modules/marion-berichte/models/CdModel.php',

	// Modules
	'Contao\ModuleBerichtReader' => 'system/modules/marion-berichte/modules/ModuleBerichtReader.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_berichtlist'   => 'system/modules/marion-berichte/templates/modules',
	'mod_berichtreader' => 'system/modules/marion-berichte/templates/modules',
));
