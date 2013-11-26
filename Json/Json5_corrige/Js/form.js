/**
 * Fonctions liées aux différents formulaires
 * @author Christian Bonhomme
 * @version 1.0
 * @package Json5
 * 
 */

/**
 * Affiche la boîte de sélection
 *
 * @return none
 */
function viewSelect()
{
  changeContent('content', '../Php/json.php', 'EX=select', 'initSelect()');
	  	
} // viewSelect()

/**
 * Affiche le champ d'input
 *
 * @return none
 */
function viewInput()
{
  changeContent('content', '../Php/json.php', 'EX=input', 'initInput()');
  
} // viewInput()

/**
 * Affiche les boutons radio
 *
 * @return none
 */
function viewRadio()
{
  changeContent('content', '../Php/json.php', 'EX=radio', 'initRadio()');
	  
} // viewRadio()

/**
 * Affiche la réponse de la boîte de sélection
 *
 * @return none
 */
function repSelect(elem)
{
  var param = 'EX=rep_select&VAL='+elem.value;
  changeContent('reponse', '../Php/json.php', param);
	
} // viewSelect()

/**
 * Affiche la réponse du champ input
 *
 * @return none
 */
function repInput(elem)
{
  var param = 'EX=rep_input&VAL='+encodeURIComponent(elem.value);
  changeContent('reponse', '../Php/json.php', param);
	
} // repInput()

/**
 * Affiche la réponse d'un bouton radio
 *
 * @return none
 */
function repRadio(elem)
{
  var param = 'EX=rep_radio&RADIO='+elem.value;
  changeContent('reponse', '../Php/json.php', param);
	
} // repRadio()
