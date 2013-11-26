/**
 * Fonctions pour le résultat du calcul
 * @author Christian Bonhomme
 * @version 1.0
 * @package Calcul10
 */

/**
 * Récupère les données du formulaire 
 * et lance la fonction changeContent pour afficher le résultat de calcul
 * @param string id identifiant de l'élément à modifier
 * @param string php programme de modification
 * @param string param paramètres de modification
 * 
 * @return none
 */
function resultatCalcul(id, php, param)
{
  var num1 = document.getElementById('num1').value;
  var num2 = document.getElementById('num2').value;
  var operation = document.getElementById('operation').value;

  param +='&NUM1='+num1+'&OPERATION='+encodeURIComponent(operation)+'&NUM2='+num2;

  changeContent(id, php, param);

  return;

} // resultatCalcul(id, php, param)
