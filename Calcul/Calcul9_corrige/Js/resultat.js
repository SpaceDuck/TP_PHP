/**
 * Fonctions pour le résultat du calcul
 * @author Christian Bonhomme
 * @version 1.0
 * @package Calcul9
 */

/**
 * Récupère les données du formulaire 
 * et lance la fonction changeContent pour afficher le résultat de calcul
 * 
 * @return none
 */
function resultatCalcul(event)
{
  // Vérifie le formulaire
  if (!verifForm (document.getElementById('calcul')))
  {
	// Stoppe l'événement
	stopEvent(event);
			
	return false;
  }
  
  // Récupère la valeur du champ id="num1"
  var num1 = document.getElementById('num1').value;
  // Récupère la valeur du champ id="num1"
  var num2 = document.getElementById('num2').value;
  // Récupère la valeur du champ id="operation"
  var operation = document.getElementById('operation').value;
  // Instancie la valeur du résultat du calcul

  // Instancie l'identifiant de l'élément cible
  var id = 'resultat';
  // Instancie le contrôleur qui effectuera le changement du contenu de la cible
  var php = '../Php/calcul.php';
  // Instancie les paramètres du contrôleur
  var param = 'EX=calcul'+'&NUM1='+num1+'&OPERATION='+encodeURIComponent(operation)+'&NUM2='+num2;

  // Appelle du programme qui effectuera le changement du contenu de la cible
  changeContent(id, php, param);
  
  // Stoppe l'événement
  stopEvent(event);

  return false;

} // resultatCalcul(event)

