<?php
/**
 * Fichier de tests des opérations pour le calcul
 * @author Christian Bonhomme
 * @version 1.0
 * @package Calcul4
 */

// Récupération de TestCase.php
require_once ('PHPUnit/Framework/TestCase.php');

// Récupération de la class CCalcul
require_once '../Class/CCalcul.class.php';

/**
 * class PHPUnit Test Case pour tester la class CCalcul
 */
class CalculTest extends PHPUnit_Framework_TestCase
{
  /**
   * Test de l'addition
   * @access public
   *
   * @return none
   */
  public function testAdd()
  {
    $val['NUM1'] = 1;
    $val['NUM2'] = 5;
    $val['OPERATION'] = '+';
    
    $CCalcul = new CCalcul($val);    
    $this->assertEquals(6, $CCalcul->res());
    $this->assertNotEquals(7, $CCalcul->res());

    return;

  } // testAdd()

  /**
   * Test de la soustraction
   * @access public
   *
   * @return none
   */
  public function testSubtract()
  {
    $val['NUM1'] = 5;
    $val['NUM2'] = 2;
    $val['OPERATION'] = '-';
    
    $CCalcul = new CCalcul($val);    
    $this->assertEquals(3, $CCalcul->res());
    $this->assertNotEquals(1, $CCalcul->res());

    return;

  } // testSubtract()

  /**
   * Test de la multiplication
   * @access public
   *
   * @return none
   */
  public function testMultiply ()
  {
    $val['NUM1'] = 6;
    $val['NUM2'] = 5;
    $val['OPERATION'] = '*';
    
    $CCalcul = new CCalcul($val);    
    $this->assertEquals(30, $CCalcul->res());
    $this->assertNotEquals(7, $CCalcul->res());

    return;

  } // testMultiply()

  /**
   * Test de la division
   * @access public
   *
   * @return none
   */
  public function testDivide()
  {
    $val['NUM1'] = 30;
    $val['NUM2'] = 5;
    $val['OPERATION'] = '/';
    
    $CCalcul = new CCalcul($val);    
    $this->assertEquals(6, $CCalcul->res());
    $this->assertNotEquals(7, $CCalcul->res());

    return;

  } // testDivide()

  /**
   * Test de la division par zéro
   * @access public
   *
   * @return none
   */
  public function testDivideByZero()
  {
    $val['NUM1'] = 3;
    $val['NUM2'] = 0;
    $val['OPERATION'] = '/';
    
    $CCalcul = new CCalcul($val);    
    $this->assertEquals('Erreur : division par zéro', $CCalcul->res());

    return;

  } // testDivideByZero()

} // CalculTest
?>