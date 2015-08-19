<?php

class ModuleDownloadListing extends Module 
{
        protected $strTemplate = 'mod_download_listing';
        
        protected function compile() {
            
                $rs = DataBase::getInstance()
                ->query('SELECT * FROM tl_downloads  ORDER BY sort_order ASC');
                $this->Template->downloads = $rs->fetchAllAssoc();            
        }
}