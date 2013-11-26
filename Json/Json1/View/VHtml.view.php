<?php
/**
 * Class d'affichage d'un fichier html
 * @author Christian Bonhomme
 * @version 1.0
 * @package Mvc10
 *
 */
class VHtml
{
  /**
   * Constructeur
   * @access public
   *        
   * @return none
   */
  public function __construct(){}

  /**
   * Destructeur
   * @access public
   *        
   * @return none
   */
  public function __destruct(){}

  /**
   * Affiche le fichier html
   * @access public
   * @string nom du fichier html à afficher
   *        
   * @return none
   */
  public function showHtml($_html)
  {
    $html = '../Html/' . $_html;
    
    is_file($html) ? include($html) : include('../Html/unknown.html');
    
  } // showHtml($_html)

} // VHtml
?>