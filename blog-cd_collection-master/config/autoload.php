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
	'Contao\CdModel'        => 'system/modules/blog-cd_collection-master/models/CdModel.php',

	// Modules
	'Contao\ModuleCdList'   => 'system/modules/blog-cd_collection-master/modules/ModuleCdList.php',
	'Contao\ModuleCdReader' => 'system/modules/blog-cd_collection-master/modules/ModuleCdReader.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_cdlist'   => 'system/modules/blog-cd_collection-master/templates/modules',
	'mod_cdreader' => 'system/modules/blog-cd_collection-master/templates/modules',
));
