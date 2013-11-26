<?php
/**
 * Travaux Pratiques : Json1
 * Fichier du contrôleur
 * @author Christian Bonhomme
 * @version 1.0
 * @package Json1
 */

// Encodage de l'application en UTF-8
header ('Content-Type: text/html; charset=utf-8');

// Récupération de l'autoload
require ('../Inc/require.inc.php');

// Récupération de la variable de contrôle
$EX = isset ($_REQUEST['EX']) ? $_REQUEST['EX'] : 'home';

// Contrôleur
switch ($EX)
{
  case 'home'   : home ();   break;
  case 'select' : select (); break;
  case 'input'  : input ();  break;
  case 'radio'  : radio ();  break;
}

// Récupération de la mise en page
require('../View/layout.view.php');

/********* Fonctions de contrôle *********/

/**
 * Affiche la page d'accueil
 *
 * @return none
 */
function home ()
{
  global $page;

  $page['title'] = 'Accueil';
  $page['class'] = 'VHtml';
  $page['method'] = 'showHtml';
  $page['arg'] = 'home.html';

} // home ()

/**
 * Affiche la boîte de sélection
 *
 * @return none
 */
function select ()
{
  global $page;

  $page['title'] = 'Select';
  $page['class'] = 'VHtml';
  $page['method'] = 'showHtml';
  $page['arg'] = 'select.html';
	
} // select ()

/**
 * Affiche le champ d'input
 *
 * @return none
 */
function input ()
{
  global $page;

  $page['title'] = 'Input';
  $page['class'] = 'VHtml';
  $page['method'] = 'showHtml';
  $page['arg'] = 'input.html';
	
} // input ()

/**
 * Affiche les boutons radio
 *
 * @return none
 */
function radio ()
{
  global $page;

  $page['title'] = 'Radio';
  $page['class'] = 'VHtml';
  $page['method'] = 'showHtml';
  $page['arg'] = 'radio.html';
	
} // select ()
?>
