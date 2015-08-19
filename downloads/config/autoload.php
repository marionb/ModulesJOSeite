<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Downloads
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'ModuleDownloadListing' => 'system/modules/downloads/modules/ModuleDownloadListing.php',
	'AjaxClassToCount'      => 'system/modules/downloads/modules/AjaxClassToCount.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_download_listing' => 'system/modules/downloads/templates',
));
