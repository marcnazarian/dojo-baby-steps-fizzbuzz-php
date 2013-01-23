<?php 

require(__DIR__.'/../src/FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
  
  /** @test */
  public function number1returns1() {
    $fizzBuzz = new FizzBuzz();
    $this->assertEquals('1', $fizzBuzz->displayFizzBuzz(1));
  }
  
  /** @test */
  public function number3returnsFizz() {
    $fizzBuzz = new FizzBuzz();
    $this->assertEquals('Fizz', $fizzBuzz->displayFizzBuzz(3));
  }

}