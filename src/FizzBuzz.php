<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    function convert(int $numberToConvert):string
    {
        if($numberToConvert % 3 == 0 && $numberToConvert % 5 != 0){
            return "fizz";
        }
        else if($numberToConvert % 3 != 0 && $numberToConvert % 5 == 0){
            return "buzz";
        }
        else if($numberToConvert % 3 == 0 && $numberToConvert % 5 == 0){
            return "fizzbuzz";
        }
        else{
            return "".$numberToConvert."";
        }
    }



}