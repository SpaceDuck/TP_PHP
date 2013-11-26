<?php
/**
 * Class d'affichage de la page d'accueil
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
   * Affiche la page d'accueil
   * @access public
   *
   * @return none
   */
  public function showHome()
  {
    // Instanciation de la class VHtml
    $vhtml = new VHtml();
    // Affiche le fichier HTML
    $vhtml->showHtml('home.html');
         
  } // showHome()
  
} // VHome
?>
