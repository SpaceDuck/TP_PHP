<?php
/**
 * Travaux Pratiques : Mvc10
 * Fichier du contrôleur
 * @author Christian Bonhomme
 * @version 1.0
 * @package Mvc10
 */

// Encodage de l'application en UTF-8
header('Content-Type:text/html; charset=UTF-8');

// Inclusion de l'autoload
require('../Inc/require.inc.php');

// Récupération de la variable de contrôle
$EX = isset ($_REQUEST['EX']) ? $_REQUEST['EX'] : 'home';

// Contrôleur
switch ($EX)
{
  case 'home'   : home();
                  break;
  case 'select' : select();
                  break;
  case 'radio'  : radio();
                  break;
  case 'input'  : input();
									break;
	default 			: home();
									break;
}

// Mise en page
require('../View/layout.view.php');

// ******* Fonctions du contrôleur ********

/**
 * Affiche Accueil
 * 
 * @return none;
 */
function home()
{
  global $page;
  
  // Instanciations du tableau associatif $page
  $page['class'] = 'VHome';      // Instanciation de la class
  $page['method'] = 'showHome';  // Instanciation de la méthode de class
  $page['arg'] = '';             // Instanciation de l'argument de la méthode de class
  
} // home()

/**
 * Affiche select
 * 
 * @return none;
 */
function select()
{
  global $page;

  // Instanciations du tableau associatif $page
  $page['class'] = 'VSelect';      // Instanciation de la class
  $page['method'] = 'showSelect';  // Instanciation de la méthode de class
  $page['arg'] = '';               // Instanciation de l'argument de la méthode de class
      
} // select()

/**
 * Affiche input
 * 
 * @return none;
 */
function input()
{
  global $page;

  // Instanciations du tableau associatif $page
  $page['class'] = 'VInput';      // Instanciation de la class
  $page['method'] = 'sInput';  		// Instanciation de la méthode de class
  $page['arg'] = '';              // Instanciation de l'argument de la méthode de class
      
} // input()

/**
 * Affiche radio
 * 
 * @return none;
 */
function radio()
{
  global $page;

  // Instanciations du tableau associatif $page
  $page['class'] = 'VRadio';      // Instanciation de la class
  $page['method'] = 'showRadio';  // Instanciation de la méthode de class
  $page['arg'] = '';              // Instanciation de l'argument de la méthode de class
      
} // radio()

?>
