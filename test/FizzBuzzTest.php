<?php 

require(__DIR__.'/../src/FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
  
  public function setUp() {
    $this->fizzBuzz = new FizzBuzz();
  }
  
  /** @test */
  public function number1returns1() {
    $this->assertEquals('1', $this->fizzBuzz->displayFizzBuzz(1));
  }
  
  /** @test */
  public function number3returnsFizz() {
    $this->assertEquals('Fizz', $this->fizzBuzz->displayFizzBuzz(3));
  }
  
  /** @test */
  public function number5returnsBuzz() {
    $this->assertEquals('Buzz', $this->fizzBuzz->displayFizzBuzz(5));
  }
  
  /** @test */
  public function number15returnsFizzBuzz() {
    $this->assertEquals('FizzBuzz', $this->fizzBuzz->displayFizzBuzz(15));
  }
  
  /** @test */
  public function number6returnsFizz() {
    $this->assertEquals('Fizz', $this->fizzBuzz->displayFizzBuzz(6));
  }
  
  /** @test */
  public function number10returnsBuzz() {
    $this->assertEquals('Buzz', $this->fizzBuzz->displayFizzBuzz(10));
  }
  
  /** @test */
  public function number30returnsFizzBuzz() {
    $this->assertEquals('FizzBuzz', $this->fizzBuzz->displayFizzBuzz(30));
  }
  
  /** @test */
  public function getFizzBuzzList() {
    $fizzBuzzList = array('1', '2', 'Fizz', '4', 'Buzz', 'Fizz', '7', '8', 'Fizz');
    $this->assertEquals($fizzBuzzList, $this->fizzBuzz->getFizzBuzzList(9));
  }
  

}