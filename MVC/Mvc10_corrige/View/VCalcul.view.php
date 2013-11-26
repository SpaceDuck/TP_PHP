<?php
/**
 * Class d'affichage de la calculatrice
 * @author Christian Bonhomme
 * @version 1.0
 * @package Mvc10
 *
 */
class VCalcul
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
   * Affiche la calculatrice
   * @access public
   *        
   * @return none
   */
  public function showCalcul()
  {
    echo <<<'NOW'
 <form id="calcul" class="form">
  <fieldset>
   <legend>Calculatrice</legend>
   <p>
    <label for="num1">Opérande gauche</label> 
    <input id="num1" class="mandatory" type="number" name="NUM1" size="5" value="" />
    <select id="operation" name="OPERATION" size="1">
	 <option value="+">+</option>
	 <option value="-">-</option>
	 <option value="*">*</option>
	 <option value="/">/</option>
    </select>
    <label for="num2">Opérande droite</label> 
    <input id="num2" class="mandatory" type="number" name="NUM2" size="5" value="" />
    <input type="submit" value="Ok" />
   </p>
  </fieldset>
 </form>
<div id="resultat"></div><!-- id="resultat" -->
    
NOW;
   
  } // showCalcul()

} // VCalcul
?>