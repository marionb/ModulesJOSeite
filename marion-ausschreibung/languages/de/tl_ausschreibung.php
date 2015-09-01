<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
 * English language file for table tl_ausschreibung.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Language
 * @license    GPL
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ausschreibung']['titel'] = array('Touren Bezeichnung', 'erscheint unter diesem Namen im Jahresprogramm');
$GLOBALS['TL_LANG']['tl_ausschreibung']['start_date'] = array('Startdatum', 'Startdatum  in der Form YYYY-MM-DD');
$GLOBALS['TL_LANG']['tl_ausschreibung']['end_date'] = array('Enddatum', 'Enddatum, f&uuml;r Mehrtägige touten, in der Form YYYY-MM-DD');
$GLOBALS['TL_LANG']['tl_ausschreibung']['anmelde_schluss'] = array('Anmeldeschluss', 'Datum in der Form YYYY-MM-DD');
$GLOBALS['TL_LANG']['tl_ausschreibung']['teaser'] = array('Teaser', 'Wird im Jahresprogramm und auf der Webseite verwendet um auf die Tour aumerksam zu machen');
$GLOBALS['TL_LANG']['tl_ausschreibung']['ziel']=array('Gipfel/Klettergebiet','Wichtig für Anmeldung bei J+S; erscheint nicht auf der Website');
$GLOBALS['TL_LANG']['tl_ausschreibung']['schwierigkeit']=array('Schwierikeitsgrad','Schwierigkeitsgrad gemäss Führer. Verschiedene Skalen sind auf ... zu finden.');
$GLOBALS['TL_LANG']['tl_ausschreibung']['route']=array('z.B Nummer aus SAC-Führer oder Beschreibung mit Quelle. Wird für J+S Anmeldung verwendet','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['vorname_org']=array('Vorname','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['name_org']=array('Name','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['email-org']=array('E-mail','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['leiter_verantwortlich']=array('Leiter','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['leiter']=array('','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['text'] = array('Text', 'Ausschreibngstext');


//$GLOBALS['TL_LANG']['tl_ausschreibung'][]=array('','');
//TODO add translation for:
// {Touren Beschrieb}, teaser, ziel, schwierigkeit, route; {Kontakt/Organisator}, vorname_org, name_org, email-org; {Leitung und Verantwortliche}, leiter_verantwortlich, leiter; {weitere Angaben}, text, treffpunkt, ruekkehr, verpflegung,anforderung, kosten, material, anmeldung'

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ausschreibung']['new']    = array('Neuer Anlass', 'Einen neuen Anlass hinzuf&uuml;gen');
$GLOBALS['TL_LANG']['tl_ausschreibung']['edit']   = array('Anlass bearbeiten', 'Anlass mit ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_ausschreibung']['copy']   = array('Anlass duplizieren', 'Anlass mit ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_ausschreibung']['delete'] = array('Anlass l&ouml;schen', 'Anlass mit ID %s l&ouml;schen');
$GLOBALS['TL_LANG']['tl_ausschreibung']['show']   = array('Details anzeigen', 'Details des Anlasses mit ID %s anzeigen');
?>