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

    protected function compile()
    {
    
    	//die ganze Tabelle
    	 
    	$objBer = $this->Database->execute("SELECT * FROM tl_bericht ORDER BY tstamp");//TODO ASC needs to change in to Descending
    	 
    	//Return if no Ausschreibungen were found
    	if(!$objBer-numRows){ return;}
    	 
    	$arrBer = array();
    	 
    	while ($objBer->next()) {
    		$image = null;
    		$file = null;

    		if($objBer->bilder != '')
    		{
    			$image = getFile();
    		}
    
    		$arrAus[] = array
    		(
    				'titel'				=> $objAus->titel,
    				//'start_date'		=> $this->datumswandler(date('Y-m-d', (int)$objAus->start_date)),
    				'image'				=> $image[0],
    				'imgText'			=> $image[1]
    
    		);
    	}
    	if (TL_MODE == 'FE') {
    		$this->Template->fmdId = $this->id;
    		$this->Template->Ausschreibung = $arrAus;
    	} }
    
    protected function getFile($file)
    {
    	if($file === null){return null;}
    	
    	$objIMG = null;
    	$objIMGText = null;
    	
    	$objModel = \FilesModel::findByUuid($file);
    
	    if($objModel === null) //Identical: $objAus is identical to Null even if the type of null is not the same as $objAus
	    {
	    	if(!\Validator::isUuid($file))
	    	{
	    		$objIMGText = '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
	    	}
	    }
	    elseif (is_file(TL_ROOT . '/' . $objModel->path))
	    {
	    
	    	$objIMG = $objModel->path;
	    }
	    return [$objIMG, $objIMGText];
    }
    
}