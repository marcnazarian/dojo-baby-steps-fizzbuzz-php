<?php 

require(__DIR__.'/../src/Foo.php');

class FooTest extends PHPUnit_Framework_TestCase {
  
  /** @test */
  public function number1returns1() {
    $foo = new Foo();
    $this->assertEquals('1', $foo->displayFizzBuzz(1));
  }

}

?>
