/**
 * Initialisation des écouteurs
 * @author Christian Bonhomme
 */

/**
 * Gestion du click sur le logo id="logo"
 */
// Récupère l'élément <h1 id="logo">
var click_logo = document.getElementById('logo');
if (click_logo)
{
  // Teste si la méthode addEventListener existe (Non IE)
  if (click_logo.addEventListener)
  {
    // Associe à l'événement click la fonction viewHome (Non IE)
    click_logo.addEventListener('click', viewHome, false);
  } 
  else
  {
    // Associe à l'événement onclick la fonction viewHome (IE)
    click_logo.attachEvent('onclick', viewHome);
  } 
  
  click_logo.style.cursor = 'pointer';
}

/**
 * Affiche la page d'accueil
 */
function viewHome()
{
  // Remplace la page actuelle par la page d'accueil
  location.replace('../Php/index.php');
}

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
 * Gestion des événements sur les listes
 */
// Récupère l'élément <form id="physicien">
var form_physicien = document.getElementById('physicien');
//Teste si l'élément form_physicien existe
if (form_physicien)
{  
  // Teste si la méthode addEventListener existe (Non IE)
  if (form_physicien.addEventListener)
  {
    // Associe à l'événement submit la fonction saveForm (Non IE)
	form_physicien.addEventListener('submit', saveForm, false);
  } 
  else
  {
	// Associe à l'événement onsubmit la fonction saveForm (IE)
	form_physicien.attachEvent('onsubmit', saveForm);
  }
  
  // Récupère les éléments <th> d'entêtes de tableau
  var click_th = document.getElementsByTagName('th');
  var nb_click_th = click_th.length;
  // Boucle sur les éléments <th>
  for (var i = 0; i < nb_click_th; ++i)
  {
    // Teste si la méthode addEventListener existe (Non IE)
    if (click_th[i].addEventListener)
    {
      // Associe à l'événement click la fonction triBulle (Non IE)
   	  click_th[i].addEventListener('click', triBulle, false);
    } 
    else
    {
	  // Associe à l'événement onclick la fonction triBulle (IE)
      click_th[i].attachEvent('onclick', triBulle);
    }
  
    // Met le curseur à pointeur sur les éléments <th>
    click_th[i].style.cursor = 'pointer';
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

