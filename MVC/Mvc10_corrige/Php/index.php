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
  case 'calcul' : calcul();
                  break;
  case 'liste'  : liste();
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
 * Affiche Calcul
 * 
 * @return none;
 */
function calcul()
{
  global $page;

  // Instanciations du tableau associatif $page
  $page['class'] = 'VCalcul';      // Instanciation de la class
  $page['method'] = 'showCalcul';  // Instanciation de la méthode de class
  $page['arg'] = '';               // Instanciation de l'argument de la méthode de class
      
} // calcul()

/**
 * Affiche Liste
 * 
 * @return none;
 */
function liste()
{
  global $page;

  // Instanciations du tableau associatif $page
  $page['class'] = 'VListe';      // Instanciation de la class
  $page['method'] = 'showListe';  // Instanciation de la méthode de class
  $page['arg'] = $_GET['ITEM'];   // Instanciation de l'argument de la méthode de class
    
} // liste()

?>