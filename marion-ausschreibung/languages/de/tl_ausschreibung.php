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
$GLOBALS['TL_LANG']['tl_ausschreibung']['end_date'] = array('Enddatum', 'Enddatum, f&uuml;r Mehrt&auml;gige Touren, in der Form YYYY-MM-DD');
$GLOBALS['TL_LANG']['tl_ausschreibung']['anmelde_schluss'] = array('Anmeldeschluss', 'Datum in der Form YYYY-MM-DD');
$GLOBALS['TL_LANG']['tl_ausschreibung']['teaser'] = array('Kurzbeschrieb in 2-3 Sätzen um auf die Tour aufmerksam zu machen', 'Wird im Jahresprogramm und auf der Webseite verwendet um auf die Tour aumerksam zu machen');
$GLOBALS['TL_LANG']['tl_ausschreibung']['ziel']=array('Gipfel/Klettergebiet','Wichtig f&uuml;r Anmeldung bei J+S; erscheint nicht auf der Website');
$GLOBALS['TL_LANG']['tl_ausschreibung']['schwierigkeit']=array('Schwierikeitsgrad','Schwierigkeitsgrad gemaess F&uuml;hrer. Verschiedene Skalen sind auf http://www.sac-cas.ch/unterwegs/schwierigkeits-skalen.html zu finden.');
$GLOBALS['TL_LANG']['tl_ausschreibung']['route']=array('Route','z.B Nummer aus SAC-F&uuml;hrer oder Beschreibung mit Quelle. Wird f&uuml;r J+S Anmeldung verwendet');
$GLOBALS['TL_LANG']['tl_ausschreibung']['vorname_org']=array('Vorname','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['name_org']=array('Name','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['leiter_verantwortlich']=array('Verantwortlicher Kursleiter/ Bergf&uuml;hrer','Diese Person tr&auml;gt gem&auml;ss J+S die Verantwortung');
$GLOBALS['TL_LANG']['tl_ausschreibung']['leiter']=array('Weiter Leiter','Name und Vorname; Wird auf der Hompage aufgef&uuml;rt und f&uuml;r J+S verwendet');
$GLOBALS['TL_LANG']['tl_ausschreibung']['text'] = array('Weitere Informationen', 'Weitere interessante Informationen fuer die Teilnehmer');
$GLOBALS['TL_LANG']['tl_ausschreibung']['treffpkt']=array('Treffpunkt','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['rueckkehr']=array('R&uuml;ckkehr','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['verpflegung']=array('Verpflegung','Was muss als Verpflegung mit gebracht werden; e.v Anzahl Lunch');
$GLOBALS['TL_LANG']['tl_ausschreibung']['anforderung']=array('Anforderung','Was ist die Anforderung an die Teilnehmer, was m&uuml;ssen Teilnehmer mindestes k&ouml;nnen');
$GLOBALS['TL_LANG']['tl_ausschreibung']['kosten']=array('Kosten','Falls noch nicht definitiv bekannt in ca. angeben');
$GLOBALS['TL_LANG']['tl_ausschreibung']['material']=array('Ausr&uuml;stung','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['anmeldung']=array('Anmeldung','WIE, WO und mit welchen Angaben sollen sich die Teinehmer anmelden');
$GLOBALS['TL_LANG']['tl_ausschreibung']['type']=array('Art der Tour','');
$GLOBALS['TL_LANG']['tl_ausschreibung']['teilnehmer']=array('Teilnehmerkreis','Bitte alle Zutreffenden ankreuzen');

//$GLOBALS['TL_LANG']['tl_ausschreibung'][]=array('','');


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ausschreibung']['new']    = array('Neuer Anlass', 'Einen neuen Anlass hinzuf&uuml;gen');
$GLOBALS['TL_LANG']['tl_ausschreibung']['edit']   = array('Anlass bearbeiten', 'Anlass mit ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_ausschreibung']['copy']   = array('Anlass duplizieren', 'Anlass mit ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_ausschreibung']['delete'] = array('Anlass l&ouml;schen', 'Anlass mit ID %s l&ouml;schen');
$GLOBALS['TL_LANG']['tl_ausschreibung']['show']   = array('Details anzeigen', 'Details des Anlasses mit ID %s anzeigen');
?>