<?php
/**
 * Class d'affichage de l'entête dans la page
 * @author Christian Bonhomme
 * @version 1.0
 * @package Mvc10
 * 
 */
class VHeader
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
   * Affiche l'entête dans la page
   * @access public
   *        
   * @return none
   */
  public function showHeader()
  {
    echo <<<'NOW'
 <ol id="entete">
  <li class="liste"><a href="#">Liste</a>
  <ol class="drop-down">
   <li><a href="../Php/index.php?EX=liste&amp;ITEM=Liste1">Liste1</a></li>
   <li><a href="../Php/index.php?EX=liste&amp;ITEM=Liste2">Liste2</a></li>
  </ol>
  </li>
  <li><a href="../Php/index.php?EX=calcul">Calculatrice</a></li>
 </ol>

NOW;
   
  } // showHeader()

} // VHeader
?>