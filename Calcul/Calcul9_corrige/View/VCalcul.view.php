<?php
/**
  * Fichier de class de types vues pour le calcul
 * @author Christian Bonhomme
 * @version 1.0
 * @package Calcul9
 */

/**
 * Class de types vues pour le calcul
 */
class VCalcul
{
  /**
   * Constructeur
   * @access public
   *
   * @return none
   */
  public function __construct() {return;}

  /**
   * Destructeur
   * @access public
   *
   * @return none
   */
  public function __destruct() {return;}

  /**
   * Affiche le formulaire du calcul
   * @access public
   *
   * @return none
   */
  public function ShowForm()
  {
    echo <<<'NOW'
<form id="calcul" class="form" action="#" method="post">
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
<div id="resultat"></div>

NOW;

    return;

  } // ShowForm()

  /**
   * Affiche le résultat du calcul
   * @access public
   * @param array tableau associatif contenant les données du calcul
   *
   * @return none
   */
   public function ShowCalcul($_calcul)
   {
     echo "<p>{$_calcul['NUM1']} {$_calcul['OPERATION']} {$_calcul['NUM2']} = <span id=\"res\">{$_calcul['RES']}</span></p>";

     return;

  } // ShowCalcul($_calcul)

} // VCalcul
?>