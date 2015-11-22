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
	// Modules
	'AjaxClassToCount'       => 'system/modules/downloads/modules/AjaxClassToCount.php',
	'Contao\ModuleFoehnAlle' => 'system/modules/downloads/modules/ModuleFoehnAlle.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_download_downloads'  => 'system/modules/downloads/templates',
	'mod_download_foehn_alle' => 'system/modules/downloads/templates',
	'mod_download_listing'    => 'system/modules/downloads/templates',
));
