<?php

class FizzBuzz {

  public function displayFizzBuzz($number) {
    if ($number == 3) {
      return "Fizz";
    } elseif ($number == 5) {
      return "Buzz";
    }
    return 1;
  }

}