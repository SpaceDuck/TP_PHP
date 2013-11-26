/**
 * Fonctions utilisées pour les formulaires
 * @author Christian Bonhomme
 */

/**
 * Vérification du formulaire 
 * Vérifie que les attributs de type NOT NULL soient renseignés
 * @param element frm élément de type formulaire
 * 
 * return boolean
 */
function verifForm(frm)
{
  // Récupère les éléments <label>
  var tabLabel = frm.getElementsByTagName('label');
  //Récupère le nombre d'éléments <label>
  var nbLabel = tabLabel.length;

  for (var i = 0, message = '', errors = 0; i < nbLabel; ++i)
  {
    // Récupère, dans l'élément <label> d'indice i, le contenu de l'attribut for 
    // correspondant au id de l'élément associé au label (input, select, ...)
    var atFor = tabLabel[i].getAttribute('for');

    if (atFor)
    {
      // Récupère l'élément associé au label ayant pour id la valeur de l'attribut for
      var elemById = document.getElementById(atFor);

      // Récupére la valeur de la classe associée à l'id
      var atClass = elemById.getAttribute('class');
      
      // Teste si l'attribut class existe
      if (atClass)
      {
      	// Expression régulière permettant de rechercher le mot mandatory
      	var pattern = /(mandatory)/;
      	// Si la class est mandatory et l'élément est null alors messsage
    	if (pattern.test(atClass) && !elemById.value)
    	{
    	  message += ' - ' + tabLabel[i].innerHTML + '\n';
    	  ++errors;
    	}    	  
      }
    }
  }
  
  // Si error est true alors alerte
  if (errors)
  {
    var deb_mes = (errors > 1) ? 'Vous devez renseigner les champs suivants :' : 'Vous devez renseigner le champ suivant :';

    message = deb_mes + '\n' + message;

    window.alert(message);

    return false;
  }

  return true;
  
} // verifForm(frm)

/**
 * Convertion d'un événement clavier en chaîne de caractères
 * @param event événement du clavier
 * 
 * @return string le caractère frappé
 */
function key2Char(event)
{
  // Boucle sur les propriétés des événements
  for (var prop in event)
  {
    if ('charCode' == prop) // Test si l'événement a la propriété charCode (Non IE)
    {
      // Récupère le caractère frappé à partir du code clavier (Non IE)
      return String.fromCharCode(event.charCode);
	}
    else if ('keyCode' == prop) // Test si l'événement a la propriété keyCode (IE)
    {
      // Récupère le caractère frappé à partir du code clavier (IE)
      return String.fromCharCode(event.keyCode);
    }
  }

} // key2Char(event)

/**
 * Vérifie que les entrées clavier sont de type entier positif
 * @param event événement du clavier
 *
 * @return string le texte valide
 */
function isInteger(event)
{
  // Expression régulière pour les entiers 
  var valid = /[0-9]/;
  // Expression régulière pour les caractères spéciaux 
  var speciaux = /[\x00\x08\x0D]/;
 
  // Récupération du caractère frappé
  var car = key2Char(event);

  // Vérifie si le caractère frappé est un entier ou un caractère spécial
  if ((valid.test(car) || speciaux.test(car)))
  {	
    return true;
  }
  
  // Stoppe l'événement
  stopEvent(event);

  return false;

} // isInteger(event)
