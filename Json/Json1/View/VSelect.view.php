<?php
/**
 * Class d'affichage de la page select
 *
 */
class VHome
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
   * Affiche la page radio
   * @access public
   *
   * @return none
   */
  public function showSelect()
  {
    echo <<<'NOW'
<form action="#" method="post">
<fieldset>
<p>
 <label for="select">Select</label>
 <select id="select" size="1">
  <option value="" selected="selected" disabled="disabled">Sélectionnez</option>
  <option value="Value 1">Option 1</option>
  <option value="Value 2">Option 2</option>
 </select>
</p>
</fieldset>
</form>
NOW;         
  } // showHome()
  
} // VHome
?>
