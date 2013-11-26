<?php
/**
 * Class d'affichage de l'entête dans la page
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
<li><a id="button_select" href="../Php/json.php?EX=select">Exo Select</a></li>
<li><a id="button_input" href="../Php/json.php?EX=input">Exo Input</a></li>
<li><a id="button_radio" href="../Php/json.php?EX=radio">Exo Radio</a></li>
NOW;
   
  } // showHeader()

} // VHeader
?>
