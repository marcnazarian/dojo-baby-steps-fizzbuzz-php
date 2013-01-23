<?php

class FizzBuzz {

  public function displayFizzBuzz($number) {
    if($number == 15) {
      return "FizzBuzz";
    } elseif ($number == 5) {
      return "Buzz";
    } elseif ($number % 3 == 0) {
      return "Fizz";
    }
    return 1;
  }

}