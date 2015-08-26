<?php
 
namespace Contao;
 
/**
 * Class ModuleAusschreibungList
 *
 * Front end module "bericht list".
 */
class ModuleBerichtList extends Module
{
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_berichtlist';
 
 
    /**
     * Display a wildcard in the back end
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
        {
            $objTemplate = new \BackendTemplate('be_wildcard');
 
            $objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['bericht_list'][0]) . ' ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&table=tl_module&act=edit&id=' . $this->id;
 
            return $objTemplate->parse();
        }
 
        return parent::generate();
    }
 
 
    
    
    
    
    
    /**
     * Generate the module
     */
    protected function compile()
    {
        
    	//die ganze Tabelle
    	$arrAus = array();
    	$objAus = $this->Database->execute("SELECT * FROM tl_bericht ORDER BY titel ASC");//TODO ORDER BY erfassungs datum
    	
    	while ($objAus->next()) {
    	    //cover Image
            $strCover = '';
            $objCover = \FilesModel::findByPk($objCds->bild);
 
            // Add cover image
            if ($objCover !== null)
            {
                $strCover = \Image::getHtml(\Image::get($objCover->path, '100', '100', 'center_center'));
            }
            
    		$arrAus[] = array
    		(
    			'title' => $objAus->titel,//todo check name
                'cover' => $strCover,
				'teaser' => $objAus->teaser,
                'text' => $objAus->text,
    			//'PDF'  => $srtPDF TODO
    		);
    	}
    	if (TL_MODE == 'FE') {
    		$this->Template->fmdId = $this->id;
    		$this->Template->Berichte = $arrAus;
    	}
    }           
}