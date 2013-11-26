<?php
/**
 * Fichier de tests selenium
 * @author Christian Bonhomme
 * @version 1.0
 * @package Calcul10
 */

// Récupération de SeleniumTestCase.php
require_once('PHPUnit/Extensions/SeleniumTestCase.php');

/**
 * class Selenium Test Case pour tester l'application Web Calculatrice
 */
class SeleniumTest extends PHPUnit_Extensions_SeleniumTestCase
{
  /**
   * Initialisation de l'environnement de test
   */
  protected function setUp()
  {
    $this->setBrowser('*firefox');
    $this->setBrowserUrl('http://IUT_LP_2012/Calcul/Calcul6/calcul.php');
    $this->setSleep(1);

  } // setUp()

  /**
   * Test de l'addition
   * @access public
   *
   * @return none
   */
  public function testAdd()
  {
    $this->open('calcul.php');
    $this->type('name=NUM1', '15');
    $this->type('name=NUM2', '5');
    $this->select('name=OPERATION', 'index=0');
    $this->click('css=input[type=submit]');
    $this->waitForPageToLoad('30000');
    $this->assertEquals('20', $this->getText('id=res'));

  } // testAdd()

  /** Test de la soustraction
   * @access public
   *
   * @return none
   */
  public function testSubtract()
  {
    $this->open('calcul.php');
    $this->type('name=NUM1', '25');
    $this->type('name=NUM2', '10');
    $this->select('name=OPERATION', 'index=1');
    $this->click('css=input[type=submit]');
    $this->waitForPageToLoad('30000');
    $this->assertEquals('15', $this->getText('id=res'));

  } // testSubtract()

  /** Test de la multiplication
   * @access public
   *
   * @return none
   */
  public function testMultiply()
  {
    $this->open('calcul.php');
    $this->type('name=NUM1', '25');
    $this->type('name=NUM2', '5');
    $this->select('name=OPERATION', 'index=2');
    $this->click('css=input[type=submit]');
    $this->waitForPageToLoad('30000');
    $this->assertEquals('125', $this->getText('id=res'));

  } // testMultiply()

  /** Test de la division
   * @access public
   *
   * @return none
   */
  public function testDivide()
  {
    $this->open('calcul.php');
    $this->type('name=NUM1', '20');
    $this->type('name=NUM2', '5');
    $this->select('name=OPERATION', 'index=3');
    $this->click('css=input[type=submit]');
    $this->waitForPageToLoad('30000');
    $this->assertEquals('4', $this->getText('id=res'));

  } // testDivide()

  /** Test de la division par zéro
   * @access public
   *
   * @return none
   */
  public function testDivideZero()
  {
    $this->open('calcul.php');
    $this->type('name=NUM1', '20');
    $this->type('name=NUM2', '0');
    $this->select('name=OPERATION', 'index=3');
    $this->click('css=input[type=submit]');
    $this->waitForPageToLoad('30000');
    $this->assertEquals('Erreur : division par zéro', $this->getText('id=res'));

  } // testDivideZero()

} // SeleniumTest