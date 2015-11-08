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
	'AjaxClassToCount'             => 'system/modules/downloads/modules/AjaxClassToCount.php',
	'Contao\ModuleDownloadListing' => 'system/modules/downloads/modules/ModuleDownloadListing.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_download_listing' => 'system/modules/downloads/templates',
));
