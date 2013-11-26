<?php
/**
 * Class d'affichage de la page radio
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
  public function showRadio()
  {
    echo <<<'NOW'
<form action="#" method="post">
<fieldset>
<p>
 <label for="toujours">Toujours</label>
 <input id="toujours" type="radio" name="RADIO" value="Toujours" />
</p>
<p>
 <label for="jamais">Jamais</label>
 <input id="jamais" type="radio" name="RADIO" value="Jamais" />
</p>
<p>
 <label for="aucun">Aucun</label>
 <input id="aucun" type="radio" name="RADIO" value="Aucun" />
</p>
</fieldset>
</form>
NOW;         
  } // showHome()
  
} // VHome
?>
