/**
 * Initialisation des écouteurs
 * @author Christian Bonhomme
 * @version 1.0
 * @package Json5
 */

/**
 * Gestion du click sur le bouton id="button_select"
 */
var click_button_select = document.getElementById('button_select');
if (click_button_select)
{
  if (click_button_select.addEventListener)
  {
	  click_button_select.addEventListener('click', viewSelect, false);
  } 
  else
  {
	  click_button_select.attachEvent('onclick', viewSelect);
  }
  
  click_button_select.style.cursor = 'pointer';
}

/**
 * Gestion du click sur le bouton id="button_input"
 */
var click_button_input = document.getElementById('button_input');
if (click_button_input)
{
  if (click_button_input.addEventListener)
  {
	  click_button_input.addEventListener('click', viewInput, false);
  } 
  else
  {
	  click_button_input.attachEvent('onclick', viewInput);
  }
  
  click_button_input.style.cursor = 'pointer';
}

/**
 * Gestion du click sur le bouton id="button_radio"
 */
var click_button_radio = document.getElementById('button_radio');
if (click_button_radio)
{
  if (click_button_radio.addEventListener)
  {
	  click_button_radio.addEventListener('click', viewRadio, false);
  } 
  else
  {
	  click_button_radio.attachEvent('onclick', viewRadio);
  }
  
  click_button_radio.style.cursor = 'pointer';
}
