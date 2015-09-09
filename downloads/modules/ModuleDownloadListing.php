<?php

class ModuleDownloadListing extends Module //TODO create different templats using the Type field to sort in to the correct FE template
{
        protected $strTemplate = 'mod_download_listing';
        
        protected function compile() {
            
                $rs = DataBase::getInstance()
                ->query('SELECT * FROM tl_downloads  ORDER BY sort_order ASC');
                $this->Template->downloads = $rs->fetchAllAssoc();
        }
}