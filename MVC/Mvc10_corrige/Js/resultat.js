/**
 * Fonctions utilisées pour le calcul
 * @author Christian Bonhomme
 */

/**
 * Récupère les données du calcul effectue l'opération et l'affiche dans l'élément resultat
 *  
 * @return boolean
 */
function resultatCalcul(event)
{
  // Vérifie le formulaire
  if (!verifForm(document.getElementById('calcul')))
  {
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
  var res = 0;

  // Transforme les valeurs récupérées en integer
  num1 = parseInt(num1);
  num2 = parseInt(num2);

  // Effectue l'opération suivant la valeur du champ id="operation"
  switch (operation)
  {
    case '+' : res = num1 + num2; break;
    case '-' : res = num1 - num2; break;
    case '*' : res = num1 * num2; break;
    case '/' : res = num1 / num2; 
  }
  
  // Instancie la variable calcul avec la chaîne du calcul
  var calcul = num1 + ' ' + operation + ' ' + num2 + ' = ' + res;
 
  // Remplace le contenu de l'élément id="resultat" par la chaîne du calcul
  document.getElementById('resultat').innerHTML = calcul;
  
  stopEvent(event);

  return false;

} // resultatCalcul(event)
