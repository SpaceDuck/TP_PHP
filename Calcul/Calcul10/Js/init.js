/**
 * Initialisation des écouteurs
 * @author Christian Bonhomme
 * @version 1.0
 * @package Calcul9
 */

/**
 * Gestion des événements sur le formulaire de calcul id="calcul"
 */
// Récupère l'élément <form id="calcul">
var form_calcul = document.getElementById('calcul');
// Teste si l'élémént form_calcul existe
if (form_calcul)
{
  // Gestion de l'événement submit sur le formulaire id="calcul"
  // Récupère l'élément <select id="operation">
  var change_operation = document.getElementById('operation');
  // Récupère les éléments <input id="num1"> et <input id="num2">
  var keypress_num1 = document.getElementById('num1');
  var keypress_num2 = document.getElementById('num2');
  // Teste si la méthode addEventListener existe (Non IE)
  if (form_calcul.addEventListener)
  {
    // Associe à l'événement submit la fonction resultatCalcul (Non IE)
    form_calcul.addEventListener('submit', resultatCalcul, false);
    // Associe à l'événement change la fonction resultatCalcul (Non IE)
    change_operation.addEventListener('change', resultatCalcul, false);
    // Associe à l'événement keypress la fonction isInteger (Non IE)
    keypress_num1.addEventListener('keypress', isInteger, false);
    keypress_num2.addEventListener('keypress', isInteger, false);
  } 
  else
  {
    // Associe à l'événement onsubmit la fonction resultatCalcul (IE)
    form_calcul.attachEvent('onsubmit', resultatCalcul);
    // Associe à l'événement onchange la fonction resultatCalcul (IE)
    change_operation.attachEvent('onchange', resultatCalcul);
    // Associe à l'événement onkeypress la fonction isInteger (IE)
    keypress_num1.attachEvent('onkeypress', isInteger);
    keypress_num2.attachEvent('onkeypress', isInteger);
  }
}

/**
 * Fonction d'arrêt de la propagation d'un événement dans la phase de bouillonnement
 * @param event événement
 */
function stopEvent(event)
{
  // Teste si la méthode stopPropagation existe (Non IE)
  if (event.stopPropagation)
  {
    // Stoppe la propagation de l'événement (pas de bouillonement)
    event.stopPropagation();
    // Remet l'événement à false
    event.preventDefault();
  }
  else
  {
    // Stoppe la propagation de l'événement (pas de bouillonement)
    event.cancelBubble = true;
    // Remet l'événement à false
    event.returnValue = false;
  }

} // stopEvent(event)
