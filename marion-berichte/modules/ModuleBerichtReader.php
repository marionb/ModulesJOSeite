<?php

namespace Contao;

/**
 * Class ModuleBerichtReader
 *
 * Front end module "Bericht reader".
 */
class ModuleBerichtReader extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_Berichtreader';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['bericht_reader'][0]) . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		// Return if there are no items
		if (!\Input::get('items'))
		{
			return '';
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
	    $objCd = \BerichtModel::findByPk(\Input::get('items'));

		// Display a 404 page if the CD was not found
		if ($objCd === null)
		{
			global $objPage;
			$objHandler = new $GLOBALS['TL_PTY']['error_404']();
			$objHandler->generate($objPage->id);
		}

		$this->Template->title = $objCd->title;
		$this->Template->teaser = $objCd->teaser;
		$this->Template->text = $objCd->text;
		$objCover = \FilesModel::findByPk($objCd->bild);

		// Add cover image
		if ($objCover !== null)
		{
			$this->Template->bild = \Image::getHtml(\Image::get($objCover->path, '100', '100', 'center_center'));
		}
	}
}
