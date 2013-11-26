<?php
/**
 * Class d'affichage du menu dans la page
 * @author Christian Bonhomme
 * @version 1.0
 * @package Mvc10
 * 
 */
class VNav
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
   * Affiche le menu dans la page
   * @access public
   *
   * @return none
   */
  public function showNav()
  {
    echo <<<'NOW'
 <h1 id="logo" title="Logo">Logo</h1>
 <ol id="menu">
  <li><a href="../Php/index.php?EX=liste&amp;ITEM=Liste1">Liste1</a></li>
  <li><a href="../Php/index.php?EX=liste&amp;ITEM=Liste2">Liste2</a></li>
 </ol>

NOW;
     
  } // showNav()
  
} // VNav
?>