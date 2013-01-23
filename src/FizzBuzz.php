<?php

class FizzBuzz {

  public function displayFizzBuzz($number) {
    if($number % 15 == 0) {
      return "FizzBuzz";
    } elseif ($number % 5 == 0) {
      return "Buzz";
    } elseif ($number % 3 == 0) {
      return "Fizz";
    }
    return 1;
  }

}