<?php

class FizzBuzz {

  public function displayFizzBuzz($number) {
    if($this->isFizzBuzz($number)) {
      return "FizzBuzz";
    } elseif ($this->isBuzz($number)) {
      return "Buzz";
    } elseif ($this->isFizz($number)) {
      return "Fizz";
    }
    return ''.$number;
  }
  
  protected function isFizz($number) {
    return $number % 3 == 0;
  }
  protected function isBuzz($number) {
    return $number % 5 == 0;
  }
  protected function isFizzBuzz($number) {
    return $this->isFizz($number) && $this->isBuzz($number);
  }
  
  public function getFizzBuzzList($maxNumber) {
    $fizzBuzzList = array();
    for ($counter = 1; $counter <= $maxNumber; $counter++) {
      $fizzBuzzList[] = $this->displayFizzBuzz($counter);
    }
    return $fizzBuzzList; //array('1', '2', 'Fizz', '4', 'Buzz', 'Fizz', '7', '8', '9');
  }

}