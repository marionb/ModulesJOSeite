<?php

namespace Contao;

/**
 * Class ModuleCdList
 *
 * Front end module "bericht list".
 */
class ModuleCdList extends \Module
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
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		$objCds = \BerichtModel::findAll();

		// Return if no Berichte were found
		if ($objCds === null)
		{
			return;
		}

		$strLink = '';

		// Generate a jumpTo link
		if ($this->jumpTo > 0)
		{
			$objJump = \PageModel::findByPk($this->jumpTo);

			if ($objJump !== null)
			{
				$strLink = $this->generateFrontendUrl($objJump->row(), '/items/%s');
			}
		}

		$arrCds = array();

		// Generate Berichte
		while ($objCds->next())
		{
			$strCover = '';
			$objCover = \FilesModel::findByPk($objCds->bild);

			// Add image
			if ($objCover !== null)
			{
				$strCover = \Image::getHtml(\Image::get($objCover->path, '100', '100', 'center_center'));
			}

			$arrCds[] = array
			(
				'title' => $objCds->title,
				'teaser' => $objCds->teaser,
				'text' => $objCds->text,
				'bild' => $strCover,
				'text' => $objCds->text,
			);
		}

		$this->Template->berichte = $arrCds;
	}
}
