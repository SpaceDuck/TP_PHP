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
  public function showInput()
  {
    echo <<<'NOW'
<form action="#" method="post">
<fieldset>
<p>
 <label for="input">Input</label>
 <input id="input" name="NOM" value="" size="10" />
</p>
</fieldset>
</form>
NOW;         
  } // showHome()
  
} // VHome
?>
