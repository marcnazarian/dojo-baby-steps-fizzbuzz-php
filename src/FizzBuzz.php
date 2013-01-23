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
    return 1;
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

}