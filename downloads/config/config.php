<?php 

$GLOBALS['BE_MOD']['content']['downloads'] = array(
    'tables' => array('tl_downloads'), 
    'icon' => 'system/themes/default/images/article.gif'
);


$GLOBALS['FE_MOD']['downloads'] = array
(
	'download_listing'     => 'ModuleDownloadListing'
);

$GLOBALS['TL_HOOKS']['simpleAjax'][] = array('AjaxClassToCount', 'countDownloads'); // Klassenname - Methodenname

?>