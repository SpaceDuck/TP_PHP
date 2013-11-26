/**
 * Fonctions liées aux différents formulaires
 * @author Christian Bonhomme
 * @version 1.0
 * @package Json3
 * 
 */

/**
 * Affiche la boîte de sélection
 *
 * @return none
 */
function viewSelect()
{
  changeContent('content', '../Php/json.php', 'EX=select');
	  	
} // viewSelect()

/**
 * Affiche le champ d'input
 *
 * @return none
 */
function viewInput()
{
  changeContent('content', '../Php/json.php', 'EX=input');
  
} // viewInput()

/**
 * Affiche les boutons radio
 *
 * @return none
 */
function viewRadio()
{
  changeContent('content', '../Php/json.php', 'EX=radio');
	  
} // viewRadio()
