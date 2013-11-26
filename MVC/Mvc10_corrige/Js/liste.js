/**
 * Fonctions utilisées pour les tableaux 
 * @author Christian Bonhomme
 */

/**
 * Récupération des données du formulaire et transformation des données au format JSON
 * Insertion des données dans le tableau et tri du tableau
 * @param element frm Elément de type formulaire
 * 
 * @return boolean
 */
function saveForm(event)
{
  // Récupère l'élément <form>
  var frm = event.target || event.srcElement;

  // Vérifie le formulaire
  if (!verifForm(frm))
  {
    // Stoppe l'événement
    stopEvent(event);
		
    return false;
  }
  
  // Crée l'objet data
  var data = new Object();
  // Instancie le membre NOM de l'objet data avec la valeur du champ id="NOM"
  data.NOM = document.getElementById('nom').value;
  // Instancie le membre PRENOM de l'objet data avec la valeur du champ id="PRENOM"
  data.PRENOM = document.getElementById('prenom').value;
 
  // Récupère le corps du tableau <tbody>
  var tbody = document.getElementsByTagName('tbody')[0];
  
  // Crée l'élément ligne <tr>
  var tr = document.createElement('tr');
  // Crée le premier élément cellule <td>
  var td1 = document.createElement('td');
  // Crée le deuxième élément cellule <td>
  var td2 = document.createElement('td');

  // Met la valeur du membre NOM de l'objet data dans la première cellule <td>
  td1.innerHTML = data.NOM;
  // Met la valeur du membre PRENOM de l'objet data dans la deuxième cellule <td>
  td2.innerHTML = data.PRENOM;

  // Ajoute la première cellule à l'élément ligne <tr>
  tr.appendChild(td1);
  // Ajoute la deuxième cellule à l'élément ligne <tr>
  tr.appendChild(td2);

  // Ajoute l'élément ligne <tr> à l'élément corps du tableau <tbody>
  tbody.appendChild(tr);
  
  // Stoppe l'événement
  stopEvent(event);
 
  return false;

} // saveForm(event)

/**
 * Méthode de tri pour les colonnes d'un tableau
 * @param string identifiant de l'élément table
 * @param int identifiant de la colonne 
 * 
 * @return none;
 */
// Variable implicite de type tableau contenant le type de tri
var type_tri = new Array();
function triBulle(event)
{
  // Récupère l'élément <th> cliqué
  var target = event.target || event.srcElement;
  
  // Récupère l'élément <tr> de l'élément <thead>
  var tr_thead = target.parentNode;
  // Récupère les éléments <th>
  var th = tr_thead.getElementsByTagName('th');
  var nb_th = th.length;
  // Boucle sure les éléments <th>
  for (var i = 0; i < nb_th; ++i)
  {
	// Teste si l'index de l'élément <th> correspond à l'élément <th> cliqué
    if (th[i] == target)
    {
      // Récupère le numéro de l'élément <th> cliqué
      col = i;
	}
  }
  
  // Récupére l'élément <table>
  var tableau = tr_thead.parentNode.parentNode;
  // Récupère l'élément <tbody>
  var tbody = tableau.getElementsByTagName('tbody')[0];
  // Récupère les éléments <tr>
  var tr = tbody.getElementsByTagName('tr');
  // Récupère le nombre d'éléments <tr>
  var nb_tr = tr.length;
  // Initialise le tableau text
  var text = new Array();
  // Initialise le tableau de copie de lignes
  var tr_clone = new Array();
  // Variable booléenne pour le test du tri
  var trier = true;
  // Variable temporaire pour les échanges de l'indice du tableau text lors du tri
  var tmp_text = null;
  // Variable temporaire pour les échanges de l'indice du tableau tr_clone lors du tri
  var tmp_tr = null;

  for (var i = 0; i < nb_tr; ++i)
  {
    // Récupère les textes en majuscules de la colonne cliquée
    text[i] = tr[i].getElementsByTagName('td')[col].innerHTML.toUpperCase();

    // Récupère la copie de la ligne correspondant au texte
    tr_clone[i] = tr[i].cloneNode(true);
  }
  
  type_tri[col] = ('desc' == type_tri[col]) ? 'asc' : 'desc';

  // Tri à bulle
  for (i = 0; i < nb_tr && trier; ++i)
  {
	// Variable du test de tri mis à false (tri réussi)
    trier = false;
    for (var j = 1; j < nb_tr - i; ++j)
    {
      // test suivant le type de tri
      // test entre la variable text d'indice j et d'indice j-1 (c'est pour quoi on démarre la boucle à j = 1)
      if (('desc' == type_tri[col] && text[j] < text[j-1]) ||
    	  ('asc' == type_tri[col] && text[j] > text[j-1]))
      {
     	// On instancie la variable temporaire avec le texte contenu dans la variable d'indice j-1
        tmp_text = text[j-1];
    	// On instancie la variable d'indice j-1 avec le texte contenu dans la variable d'indice j
        text[j-1] = text[j];
    	// On instancie la variable d'indice j  avec le texte contenu dans la variable temporaire
        text[j] = tmp_text;

       	// On instancie la variable temporaire avec la ligne copiée contenue dans la variable d'indice j-1
        tmp_tr = tr_clone[j-1];
       	// On instancie la variable d'indice j-1 avec la ligne copiée contenue dans la variable d'indice j
        tr_clone[j-1] = tr_clone[j];
    	// On instancie la variable d'indice j  avec la ligne copiée contenue dans la variable temporaire
        tr_clone[j] = tmp_tr;

    	// Variable du test de tri mis à true (tri échoué)
        trier = true;
      }
    }
  }
  
  // Ajout des lignes dans le corps du tableau suivant une méthode descendante
  for (var i = 0; i < nb_tr; ++i)
  {
 	// Ajout de la ligne à l'élément <tbody>
    tbody.replaceChild(tr_clone[i], tr[i]);
  }

} // triBulle(event)
