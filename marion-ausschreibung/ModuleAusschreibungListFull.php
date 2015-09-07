<?php
 
namespace Contao;
 
/**
 * Class ModuleAusschreibungList
 *
 * Front end module "cd list".
 */
class ModuleAusschreibungList extends Module
{
 
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_ausschreibunglistfull';

    /**
     * Generate the module
     */
    protected function compile()
    {
        
    	//die ganze Tabelle
    	$arrAus = array();
    	$objAus = $this->Database->execute("SELECT * FROM tl_ausschreibung ORDER BY start_date ASC");
    	
    	while ($objAus->next()) {
    		$arrAus[] = array
    		(
    			'title' => $objAus->title,
                'start_date' => $objAus->start_date,
                'end_date' => $objAus->end_date,
                'anmelde_schluss' => $objAus->anmelde_schluss,
                //'cover' => $strCover,
				'teaser' => $objAus->teaser,
                'text' => $objAus->text
    		);
    	}
    	if (TL_MODE == 'FE') {
    		$this->Template->fmdId = $this->id;
    		$this->Template->Ausschreibung = $arrAus;
    	} }  	
 
            //coover Image
            /*$strCover = '';
            $objCover = \FilesModel::findByPk($objCds->cover);
 
            // Add cover image
            if ($objCover !== null)
            {
                $strCover = \Image::getHtml(\Image::get($objCover->path, '100', '100', 'center_center'));
            }*/
    	public function datumswandler($Datum)
    	{
    	
    		$Tag = substr($Datum, 8, 2); //Nimmt die 2 Zeichen rechts des 8. Zeichens(=Zeichen 9 und 10)
    		$Monat = substr($Datum, 5, 2); //Nimmt die 2 Zeichen rechts des 5. Zeichens(=Zeichen 6 und 7)
    		$Jahr = substr($Datum, 0, 4); //Gibt die 4-stellige Jahreszahl z.B 2007)
    	
    		$WochentagEnglisch = date("l", mktime(0, 0, 0, $Monat, $Tag, $Jahr));
    	
    		$WochentagArray = array(
    				'Monday' => "Mo",
    				'Tuesday' => "Di",
    				'Wednesday' => "Mi",
    				'Thursday' => "Do",
    				'Friday' => "Fr",
    				'Saturday' => "Sa",
    				'Sunday' => "So"
    		);
    		$WochentagDeutsch = $WochentagArray[$WochentagEnglisch];
    	
    		$Jahr = substr($Datum, 2, 2); //Gibt die 2-stellige Jahreszahl z.B. "07")
    	
    		$Datum = $WochentagDeutsch . ', ' . $Tag . '.' . $Monat . '.' . $Jahr; //Haengt die Variablen zum fertigen Datum zusammen
    		return $Datum;
    	}
            
}