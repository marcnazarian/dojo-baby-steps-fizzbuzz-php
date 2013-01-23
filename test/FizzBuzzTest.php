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

}