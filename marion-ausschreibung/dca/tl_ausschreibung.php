<?php 
 
/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that
 * specializes in accessibility and generates W3C-compliant HTML code. It
 * provides a wide range of functionality to develop professional websites
 * including a built-in search engine, form generator, file and user manager,
 * CSS engine, multi-language support and many more. For more information and
 * additional TYPOlight applications like the TYPOlight MVC Framework please
 * visit the project website http://www.typolight.org.
 *
 * This is the data container array for table tl_ausschreibung.
 *
 * PHP version 5
 * @copyright  marion baumgartner
 * @author     marion baumgartner
 * @package    Ausschreibung
 * @license    GPL
 * @filesource
 */


/**
 * Table tl_ausschreibung
 */
$GLOBALS['TL_DCA']['tl_ausschreibung'] = array(

       // Config
       'config' => array(
              'dataContainer' => 'Table', //=> Tabel, File or Folder
              'enableVersioning' => true, //Erlaubt das anlegen einer neuen Version beim Speichern eines Datensatzes
              /*'onload_callback' => array(
                     array(
                            'tl_ausschreibung',
                            'setUpPalettes'
                     ),
                     array(
                            'tl_ausschreibung',
                            'importCsv'
                     ),*/
              /*       array(
                            'tl_ausschreibung',
                            'setKalenderwocheToDb'
                     ),
					 
                     array(
                            'tl_ausschreibung',
                            'hideEndDateWhenEmpty'
                     )
              ),
              'ondelete_callback' => array(
                     array(
                            'tl_ausschreibung',
                            'ondeleteCb_delPraesenzkontrolle'
                     )
              ),*/
			  /*
			   * Bestimmt die Konfiguration der Datenbank
			   */
              'sql' => array(
                     'keys' => array(
                            'id' => 'primary',
                     )
              )
       ),

       // List
       'list' => array(
              'sorting' => array(              		
                     'mode' 			=> 2, //Sortierung nach einem festen Feld
                     'fields'			=> array('titel', 'start_date', 'end_date', 'anmelde_schluss', 'ziel', 'route', 'teilnehmer', 'type', 'show_price'),
                     //'flag' 			=> 1,  //Aufsteigende Sortierung nach Anfangsbuchstaben
                     'panelLayout' 		=> 'filter,sort,search,limit',
                     //'disableGrouping' 	=> true 
              ),
              'label' => array(
              		'fields'			=> array('titel', 'vorname_org', 'name_org', 'show_price'),
                     //'fields' => array('titel', 'start_date'),
                     'format' => '%s - %s %s - %d', //TODO
                     /*'label_callback' => array(
                            'tl_ausschreibung',
                            'labelCallback' //??
                     ) */ //aufruf der eigenen Routine fuer die Ausgabe

              ),
              'global_operations' => array( //Bearbeitungsfelder unterhalb der Filterfelder
                     'all' => array(
                            'label' => &$GLOBALS['TL_LANG']['MSC']['all'],
                            'href' => 'act=select',
                            'class' => 'header_edit_all',
                            'attributes' => 'onclick="Backend.getScrollOffset()"accesskey="e"'
                     )
              ),
              'operations' => array(
                     'edit' => array(
                            'label' => &$GLOBALS['TL_LANG']['tl_ausschreibung']['edit'],
                            'href' => 'act=edit',
                            'icon' => 'edit.gif'
                     ),
                     'copy' => array(
                            'label' => &$GLOBALS['TL_LANG']['tl_ausschreibung']['copy'],
                            'href' => 'act=copy',
                            'icon' => 'copy.gif'
                     ),
                     'delete' => array(
                            'label' => &$GLOBALS['TL_LANG']['tl_ausschreibung']['delete'],
                            'href' => 'act=delete',
                            'icon' => 'delete.gif',
                            'attributes' => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
                     ),
                     'show' => array(
                            'label' => &$GLOBALS['TL_LANG']['tl_ausschreibung']['show'],
                            'href' => 'act=show',
                            'icon' => 'show.gif'
                     ),
              )
       ),


             // Palettes
        'palettes' => array(
              '__selector__' => array(),
              'default' => '{Titel}, titel; {Zeit}, start_date, end_date, anmelde_schluss; {Tourenbeschrieb}, teaser, ziel, schwierigkeit, route, teilnehmer, type; {Angaben zum Organisator (Diese Person ist zustaendig fuer die Administration)}, vorname_org, name_org; {Leitung und Verantwortliche}, leiter_verantwortlich, leiter; {Detailangaben falls bereits bekannt}, text, treffpkt, rueckkehr, verpflegung, anforderung, kosten, material, anmeldung; {Bilder hoch laden}, bilder, show_price',
       ),


      // Fields
       'fields' => array(
				'id' => array(
					'sql'           => "int(10) unsigned NOT NULL auto_increment"
				),
				'tstamp' => array(
					'sql'           => "int(10) unsigned NOT NULL default '0'"
				),
              	'titel' => array(
					'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['titel'],
					'exclude'                 => true, //blendet das feld fuer regulaere Nutzer aus
					'search'                  => true,
					'inputType'               => 'text',
					'eval'                    => array('maxlength'=>50, 'tl_class'=>'long', 'mandatory'=>'true'),
					'sql'                     => "varchar(50) NOT NULL default ''"
				),
				'start_date'				=> array(
                     'exclude' 				=> true,
                     'label' 				=> &$GLOBALS['TL_LANG']['tl_ausschreibung']['start_date'],
                     'inputType' 			=> 'text',
                     'search' 				=> true,
                     'sorting' 				=> true,
                     //			'filter' 				  => true,
                     'eval' 				=> array(
                            'mandatory' 	=> true,
                            'datepicker' 	=> true,
                            'rgxp' 			=> 'date'
                     ),
					 'sql'					=> "int(10) unsigned NULL"
				),
				'end_date' => array(
                     'exclude' => true,
                     'label' => &$GLOBALS['TL_LANG']['tl_ausschreibung']['end_date'],
                     'inputType' => 'text',
                     'search' => true,
                     'sorting' => true,
                     //			'filter' 				  => true,
                     'eval' => array(
                            'mandatory' => false,
                            'datepicker' => true,
                            'rgxp' => 'date'
                     ),
					 'sql'					=> "int(10) unsigned NULL"
				),
				'anmelde_schluss' => array(
                     'exclude' => true,
                     'label' => &$GLOBALS['TL_LANG']['tl_ausschreibung']['anmelde_schluss'],
                     'inputType' => 'text',
                     'search' => true,
                     'sorting' => true,
                     'filter' 				  => true,
                     'eval' => array(
                            'mandatory' => true,
                            'datepicker' => true,
                            'rgxp' => 'date'
                     ),
					 'sql'					=> "int(10) unsigned NULL"
				),
				'teaser' => array(
					'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['teaser'],
					'exclude'                 => true,
					'search'                  => true,
					'inputType'               => 'text',
					'eval'                    => array(
							'maxlength'		  => 400, //TODO check if this number is OK
							'tl_class'		  =>'long',
							'mandatory'		  =>true
							),
					'sql'                     => "varchar(700) NOT NULL default ''"
				),
				'type'  => array
				(
					'label'     => &$GLOBALS['TL_LANG']['tl_ausschreibung']['type'],
					'inputType' => 'select',
					'exclude'   => true,
					'sorting'   => true,
					//'flag'      => 1,
					'options'   => array('Skitour', 'Hochtour', 'Skihochtour', 'Klettern', 'Alpinklettern', 'Wandern', 'Plausch'),
					//'reference' => &$GLOBALS['TL_LANG']['tl_ausschreibung'],
					'eval'      => array(
						'includeBlankOption' => true,
						//'submitOnChange'     => true,
						'mandatory'          => true,
						'tl_class'           => 'w50'
					),
					'sql'       => "varchar(15) NOT NULL default ''"
				),
       		    'ziel' => array(
       		    		'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['ziel'],
       		    		'exclude'                 => true,
       		    		'search'                  => true,
       		    		'inputType'               => 'text',
       		    		'eval'                    => array(
       		    				'maxlength'		  => 100,
       		    				'tl_class'		  =>'long',
       		    				'mandatory'		  => true
       		    		),
       		    		'sql'                     => "varchar(100) NOT NULL default ''"
       		    ),
       		'schwierigkeit' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['schwierigkeit'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 100,
       						'tl_class'		  =>'long',
       						'mandatory'		  => true
       				),
       				'sql'                     => "varchar(100) NOT NULL default ''"
       		),
       		'route' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['route'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 500,
       						'tl_class'		  =>'long',
       						'mandatory'		  =>true
       				),
       				'sql'                     => "varchar(500) NOT NULL default ''"
       		),
       		'teilnehmer'  => array
       		(
       				'label'     => &$GLOBALS['TL_LANG']['tl_ausschreibung']['teilnehmer'],
       				'inputType' => 'checkbox',
       				'exclude'   => true,
       				'sorting'   => true,
       				//'flag'      => 1,
       				'options'   => array('JO', 'KiBe', 'FaBe', 'J+S Kids'),
       				//'reference' => &$GLOBALS['TL_LANG']['tl_ausschreibung'],
       				'eval'      => array(
       						'includeBlankOption' => false,
       						//'submitOnChange'     => true,
       						'mandatory'          => true,
       						'multiple'			 => true,
       						'size'				 => 4,
       						'fieldType' 		 => 'checkbox',
       						'tl_class'           => 'w50'
       				),
       				'sql'       => "blob NULL" //"varchar(30) NOT NULL default ''"
       		),
       		'name_org' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['name_org'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 50,
       						'tl_class'		  =>'long',
       						'mandatory'		  =>true
       				),
       				'sql'                     => "varchar(50) NOT NULL default ''"
       		),
       		'vorname_org' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['vorname_org'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 50,
       						'tl_class'		  =>'long',
       						'mandatory'		  =>true
       				),
       				'sql'                     => "varchar(50) NOT NULL default ''"
       		),
       		'leiter_verantwortlich' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['leiter_verantwortlich'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 50,
       						'tl_class'		  =>'long',
       						'mandatory'		  => true
       				),
       				'sql'                     => "varchar(50) NOT NULL default ''"
       		),
       		'leiter' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['leiter'],
       				'exclude'                 => true,
       				'search'                  => false,
       				'inputType'               => 'textarea',
       				'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
       				'sql'                     => "text NULL"
       		),
       		'text' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['text'],
       				'exclude'                 => true,
       				'search'                  => false,
       				'inputType'               => 'textarea',
       				'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
       				'sql'                     => "text NULL"
       		),
       		'treffpkt' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['treffpkt'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 100,
       						'tl_class'		  =>'long',
       						'mandatory'		  => false
       				),
       				'sql'                     => "varchar(100) NOT NULL default ''"
       		),
       		'rueckkehr' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['rueckkehr'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 100,
       						'tl_class'		  =>'long',
       						'mandatory'		  => false
       				),
       				'sql'                     => "varchar(100) NOT NULL default ''"
       		),
       		'verpflegung' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['verpflegung'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 500,
       						'tl_class'		  =>'long',
       						'mandatory'		  => false
       				),
       				'sql'                     => "varchar(500) NOT NULL default ''"
       		),
       		'anforderung' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['anforderung'],
       				'exclude'                 => true,
       				'search'                  => true,
       				'inputType'               => 'text',
       				'eval'                    => array(
       						'maxlength'		  => 200,
       						'tl_class'		  =>'long',
       						'mandatory'		  => false
       				),
       				'sql'                     => "varchar(200) NOT NULL default ''"
       		),
       		'kosten' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['kosten'],
       				'exclude'                 => true,
       				'search'                  => false,
       				'inputType'               => 'textarea',
       				'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
       				'sql'                     => "text NULL"
       		),
       		'material' => array(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['material'],
       				'exclude'                 => true,
       				'search'                  => false,
       				'inputType'               => 'textarea',
       				'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
       				'sql'                     => "text NULL"
       		),
			'anmeldung' => array(
					'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['anmeldung'],
					'exclude'                 => true,
       				'search'                  => false,
       				'inputType'               => 'textarea',
       				'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
       				'sql'                     => "text NULL"
       		),
       		'bilder' => array
       		(
       				'label'                   => &$GLOBALS['TL_LANG']['tl_ausschreibung']['bilder'],
       				'exclude'                 => true,
       				'inputType'               => 'fileTree',
       				'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>$GLOBALS['TL_CONFIG']['validImageTypes']),
       				'sql'                     => "binary(16) NULL"
       		),
       		'show_price'=> array(
       				'label'					  => &$GLOBALS['TL_LANG']['tl_ausschreibung']['show_price'],
       				'exclude'				  => true,       				
       				'inputType' 			  => 'checkbox',
       				'sorting'   			  => true,
       				'eval'					  => array(
       						
       						'includeBlankOption'	=> false,
       						'mandatory'				=> false,
       						'isBoolean'				=> true,
       						'fieldType'				=> 'checkbox',
       				),
       				//'sql'       			  => "tinyint default 0" //"varchar(30) NOT NULL default ''"
       		)
       )
);


/*callblack klasse*/

class tl_ausschreibung extends Backend
{

       public function __construct()
       {

              parent::__construct();
              $this->import('BackendUser', 'User');

              // datum to string 
              $sql = $this->Database->execute("SELECT * FROM tl_ausschreibung");
              while ($sql->next())
              {
                     if (strstr($sql->end_date, '.') && strstr($sql->start_date, '.'))
                     {
                            $start = mktime(0, 0, 0, substr($sql->start_date, 3, 2), substr($sql->start_date, 0, 2), substr($sql->start_date, 6, 4));
                            $end = mktime(0, 0, 0, substr($sql->end_date, 3, 2), substr($sql->end_date, 0, 2), substr($sql->end_date, 6, 4));
                            $set = array(
                                   "start_date" => $start,
                                   "end_date" => $end
                            );
                            $sqlUpd = $this->Database->prepare("UPDATE tl_ausschreibung %s WHERE id=?")->set($set)->execute($sql->id);
                     }

              }
       }


       /**
        * @param DataContainer $dc
        */
       /*public function ondeleteCb_delPraesenzkontrolle(DataContainer $dc)
       {

              $objDb = $this->Database->prepare('SELECT * FROM tl_praesenzkontrolle WHERE pid=?')->execute($dc->id);
              while ($objDb->next())
              {
                     $objDel = $this->Database->prepare('DELETE FROM tl_praesenzkontrolle WHERE id=?')->execute($objDb->id);
                     if ($objDel->affectedRows)
                     {
                            $this->log('DELETE FROM tl_praesenzkontrolle WHERE id=' . $objDb->id, __CLASS__ . ' ' . __FUNCTION__ . '()', TL_GENERAL);
                     }
              }

       }


       public function setUpPalettes()
       {

              if ($this->User->isAdmin)
              {
                     $GLOBALS['TL_DCA']['tl_jahresprogramm']['list']['global_operations']['csv_import'] = array(
                            'label' => &$GLOBALS['TL_LANG']['tl_jahresprogramm']['global_operation_csv_import'],
                            'href' => '&act=create&mode=csv_import',
                            'class' => 'page_excel',
                            'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"'
                     );

                     if ($this->Input->get('act') == 'edit' && $this->Input->get('mode') == 'csv_import')
                     {
                            $GLOBALS['TL_DCA']['tl_jahresprogramm']['list']['sorting']['panelLayout'] = '';
                            $GLOBALS['TL_DCA']['tl_jahresprogramm']['palettes']['default'] = $GLOBALS['TL_DCA']['tl_jahresprogramm']['palettes']['csv_import'];
                     }
              }

       }*/


       public function stripTagsSaveCallback($feldwert)
       {

              $feldwert = str_replace(';', ',', $feldwert);
              return $feldwert;

       }


    /*   public function importCsv()
       {

              if (!$this->Input->post('singleSRC') && $this->Input->post("importSql") == "")
              {
                     return;
              }

              //sql-import
              if ($this->Input->postRaw("importSql") != "")
              {
                     //Tabelle(n) leeren
                     if ($this->Input->post('deleteTlPraesenzkontrolle'))
                     {
                            $this->Database->execute("TRUNCATE tl_praesenzkontrolle");
                            $this->log('Table "tl_praesenzkontrolle" has been truncated.', __CLASS__ . ' ' . __FUNCTION__ . '()', TL_GENERAL);

                     }
                     $this->Database->execute("TRUNCATE tl_jahresprogramm");
                     $this->log('Table "tl_jahresprogramm" has been truncated.', __CLASS__ . ' ' . __FUNCTION__ . '()', TL_GENERAL);
                     $this->Database->query($this->Input->postRaw("importSql"));
                     $this->redirect('contao/main.php?do=jahresprogramm');
                     return;
              }

              //csv-Import
              if (!is_file(TL_ROOT . '/' . $this->Input->post('singleSRC')))
              {
                     return;
              }
              // Wichtig!!!
               // csv-Datei muss im editor unbedingt mit der Zeichencodierung utf-8 abgespeichert werden,
               // da ansonsten die Umlaute nicht richtig dargestellt werden!
               //
              //Tabelle(n) leeren
              $this->Database->execute("TRUNCATE tl_jahresprogramm");
              $this->log('Table "tl_jahresprogramm" has been truncated.', __CLASS__ . ' ' . __FUNCTION__ . '()', TL_GENERAL);

              if ($this->Input->post('deleteTlPraesenzkontrolle'))
              {
                     $this->Database->execute("TRUNCATE tl_praesenzkontrolle");
                     $this->log('Table "tl_praesenzkontrolle" has been truncated.', __CLASS__ . ' ' . __FUNCTION__ . '()', TL_GENERAL);
              }

              $file = new File($this->Input->post('singleSRC'));

              // Wichtig!!!
              // Jede Zeile muss mit dem String 'lineEnd' (=Inhalt der letzten Spalte) markiert werden!
              //
              $ArrContent = explode(';lineEnd', $file->getContent());
              //Datei zeilenweise einlesen

              $line = 0;
              foreach ($ArrContent as $strLine)
              {
                     if ($line === 0)
                     {
                            $arrFieldnames = explode(';', str_replace("?", "", utf8_decode($strLine)));
                            $line += 1;
                     }
                     else
                     {
                            //Zeilenumbr�che tempor�r durch **<BR>## ersetzen, da das Feld 'kommentar' ein textarea-Feld mit Zeilenumbr�chen sein kann
                            $strLine = str_replace(chr(10), "**<BR>##", $strLine);
                            $strLine = substr($strLine, 9);
                            //echo $strLine .chr(10)."<br>";
                            $arrContent = explode(';', $strLine);
                            $indexField = 0;
                            $set = array();
                            foreach ($arrFieldnames as $fieldname)
                            {
                                   if ($fieldname == "id")
                                   {
                                          //auto_increment
                                   }
                                   elseif ($fieldname == "kw")
                                   {
                                          //kw wird automatisch gesetzt
                                          $set[$fieldname] = "";
                                   }
                                   //Datum in der Form j.n.Y (ohne f�hrende Nullen!!!) in der Textdatei ablegen
                                   elseif ($fieldname == "start_date" || $fieldname == "end_date")
                                   {
                                          $arrDate = explode(".", $arrContent[$indexField]);
                                          //int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )
                                          $set[$fieldname] = mktime(0, 0, 0, (int)$arrDate[1], (int)$arrDate[0], (int)$arrDate[2]);
                                   }
                                   else
                                   {
                                          $set[$fieldname] = $arrContent[$indexField] == "" ? "" : trim(str_replace("**<BR>##", chr(10), $arrContent[$indexField]));
                                          $set[$fieldname] = str_replace("<br>", chr(10), $set[$fieldname]);
                                   }
                                   $indexField++;
                            }
                            //Wichtig! Da Datens�tze durch revise table in DC_Table.php wieder gel�scht werden
                            $set["tstamp"] = time();

                            $objDb = $this->Database->prepare("INSERT INTO tl_jahresprogramm %s")->set($set)->executeUncached();
                            $this->log(sprintf('A new version of %s ID %s has been created', 'tl_jahresprogramm', $objDb->insertId), __CLASS__ . ' ' . __FUNCTION__ . '()', TL_GENERAL);
                            $line += 1;
                     }
              }
              $this->redirect('contao/main.php?do=jahresprogramm');
       }
*/

       //formatiert das Datum vom unixTimestamp in Y-m-d
       public function formatDate($var, DataContainer $dc)
       {

              $datum = date("Y-m-d", $var);
              return $datum;
       }


       /*public function labelCallback($row, $label)
       {

              $label = str_replace('#datum#', date('Y-m-d', (int)$row['start_date']), $label);

              $mysql = $this->Database->prepare('SELECT start_date FROM tl_ausschreibung WHERE id=?')->execute($row['id']);

              if (time() > $row['start_date'])
              {
                     $status = '<div style="display:inline; padding-right:4px;"><img src="system/modules/mcupic_jahresprogramm/html/checkmark.png" alt="history" title="abgelaufen"></div>';
              }
              else
              {
                     $status = '<div style="display:inline; padding-right:0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>';
              }
              $label = str_replace('#STATUS#', $status, $label);
              return $label;
       }*/


       /*erstellt anhand des startDatums in der db die Kalenderwoche in der der Anlass stattfindet*/
       /*public function setKalenderwocheToDb()
       {

              $date = $this->Database->prepare("SELECT start_date,id FROM tl_jahresprogramm")->execute();
              while ($row = $date->next())
              {
                     if ($row->start_date == "")
                     {
                            return;
                     }
                     $setKw = $this->Database->prepare("UPDATE tl_jahresprogramm SET kw = ? WHERE id = ?");
                     $setKw->execute(date("W", $row->start_date), $row->id);
              }
       }
*/

       public function hideEndDateWhenEmpty(DataContainer $dc)
       {

              //Wenn fuer das End-Datum nichts angegeben wird, wird dafuer automatisch das Start-Datum eingetragen
              $date = $this->Database->prepare("SELECT id, start_date FROM tl_ausschreibung WHERE start_date!='' AND end_date=''")->execute();
              while ($row = $date->next())
              {
                     $end_date = $this->Database->prepare("UPDATE tl_ausschreibung SET end_date = ? WHERE id = ?");
                     $end_date->execute($row->start_date, $row->id);
              }
              //Wenn end-datum leer ist, wird es ausgeblendet, das ist der Fall beim Erstellen neuer Anlaesse
              if ($dc->id != "" && $this->Input->get('mode') != 'csv_import')
              {

                     $date = $this->Database->prepare("SELECT start_date FROM tl_ausschreibung WHERE id = ?")->execute($dc->id);
                     $date->fetchAssoc();
                     if ($date->start_date == "")
                     {
                            $GLOBALS['TL_DCA']['tl_ausschreibung']['palettes']['default'] = 'start_date, art, ort, wettkampfform; zeit, trainer; kommentar; phase, trainingsstunden';
                     }
              }

       }
}
?>