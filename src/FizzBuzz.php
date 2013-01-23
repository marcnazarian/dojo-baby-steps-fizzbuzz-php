<?php

class FizzBuzz {

  public function displayFizzBuzz($number) {
    if ($number == 3) {
      return "Fizz";
    } elseif ($number == 5) {
      return "Buzz";
    } elseif ($number == 15) {
      return "FizzBuzz";
    }
    return 1;
  }

}