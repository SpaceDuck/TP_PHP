<?php
/**
 * Class d'affichage du tableau et du formulaire associé
 * @author Christian Bonhomme
 * @version 1.0
 * @package Mvc10
 *
 */
class VListe
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
   * Affiche le tableau et le formulaire associé
   * @access public
   *        
   * @return string formulaire et tableau
   */
  public function showListe($_item)
  {
    // Affiche le formulaire de liste
    $this->showForm();
    
    // Affiche le tableau suivant la valeur de $_item
    ('Liste1' == $_item) ? $this->showTable1() : $this->showTable2();
  
  } // showListe($_item)
  
  /**
   * Affiche le formulaire
   * @access private
   *
   * @return none
   */
  private function showForm()
  {
    echo <<<'NOW'
 <div id="content1">
  <form id="physicien" class="form">
   <fieldset>
    <legend>Formulaire</legend>
    <p>
     <label for="nom">Nom</label>
     <input id="nom" class="mandatory" name="NOM" value="" size="15" maxlength="250" />
    </p>
    <p>
     <label for="prenom">Prénom</label>
     <input id="prenom" class="mandatory" name="PRENOM" value="" size="15" maxlength="250" />
    </p>
    <p>
     <input type="submit" value="Ok" />
    </p>
   </fieldset>
  </form>
 </div><!-- id="content1" -->

NOW;
     
  } // showForm()
  
  /**
   * Affiche le tableau
   * @access private
   *
   * @return none1   */
  private function showTable1()
  {
    echo <<<'NOW'
 <div id="content2">
  <table id="liste" class="tableau">
   <thead>
    <tr>
     <th>Nom</th>
     <th>Prénom</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     <td>Newton</td>
     <td>Isaac</td>
    </tr>
    <tr>
     <td>Maxwell</td>
     <td>James Clerk</td>
    </tr>
    <tr>
     <td>Faraday</td>
     <td>Michael</td>
    </tr>
    <tr>
     <td>de Laplace</td>
     <td>Pierre-Simon</td>
    </tr>
   </tbody>
  </table>
 </div><!-- id="content1" -->

NOW;
     
  } // showTable1()
  
  /**
   * Affiche le tableau Liste2
   *
   * @access private
   *
   * @return none
   */
  private function showTable2()
  {
    echo <<<'NOW'
 <div id="content2">
  <table id="liste" class="tableau">
   <thead>
    <tr>
     <th>Nom</th>
     <th>Prénom</th>
    </tr>
   </thead>
   <tbody>
    <tr>
     <td>Einstein</td>
     <td>Albert</td>
    </tr>
    <tr>
     <td>Dirac</td>
     <td>Paul</td>
    </tr>
    <tr>
     <td>Gell-Mann</td>
     <td>Murray</td>
    </tr>
    <tr>
     <td>Higgs</td>
     <td>Peter</td>
    </tr>
   </tbody>
  </table>
 </div><!-- id="content2" -->
    
NOW;
  
  } // showTable2()
 
} // VListe
?>