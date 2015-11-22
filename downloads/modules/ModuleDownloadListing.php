<?php
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
				'titel' 		=> $objAus->title,
    			'type'			=> $objAus->type,
    			'description'	=> $objAus->description,
				'href'			=> $objHref,
				'tstamp'		=> $this->datumswandler(date('Y-m-d', (int)$objAus->tstamp)),
			);
		}
		if (TL_MODE == 'FE') {
			$this->Template->fmdId = $this->id;
			$this->Template->Ausschreibung = $arrAus;
		}
		$this->Template->arrNextDownloads = $arrNextDownloas;
	}
	
	
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