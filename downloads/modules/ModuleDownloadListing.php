<?php

/*class ModuleDownloadListing extends Module //TODO create different templats using the Type field to sort in to the correct FE template
{
        protected $strTemplate = 'mod_download_listing';
        
        protected function compile() {
            
                $rs = DataBase::getInstance()
                ->query('SELECT * FROM tl_downloads  ORDER BY sort_order ASC');
                $this->Template->downloads = $rs->fetchAllAssoc();
        }
}*/

namespace Contao;

/**
 * Class ModuleDownloadListing
 */
class ModuleDownloadListing extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_download_listing';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}

	/**
	 * Generate the module
	 */
	protected function compile()
	{
		$arrNextDownloas = array();
		$objAus = $this->Database->execute("SELECT * FROM  tl_downloads ORDER BY tstamp");		 
		while ($objAus->next()) {
			$var1;
			$objHref = null;
			if($objAus->href != '')
			{
				$objModel = \FilesModel::findByUuid($objAus->href);
				 
				if($objModel === null) //Identical: $objAus is identical to Null even if the type of null is not the same as $objAus
				{
					if(!\Validator::isUuid($objAus->href))
					{
						$objHref = '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
					}
				}
				elseif (is_file(TL_ROOT . '/' . $objModel->path))
				{
			
					$var1='passed if for path';
					$objHref = $objModel->path;
				}
			}
			
			$arrNextDownloas[] = array
			(
				'titel' 		=> $objAus->titel,
    			'type'			=> $objAus->type,
    			'description'	=> $objAus->description,
				'href'			=> $objHref
			);
		}
		if (TL_MODE == 'FE') {
			$this->Template->fmdId = $this->id;
			$this->Template->Ausschreibung = $arrAus;
		}
		$this->Template->arrNextDownloads = $arrNextDownloas;
	}
}