<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;
use Deg540\PHPTestingBoilerplate\FizzBuzz;
class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function returns_fizz_for_multiple_of_3()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(3);

        $this->assertEquals('fizz',$convertedNumber);
    }
    /**
     * @test
     */
    public function returns_buzz_for_multiple_of_5()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(5);

        $this->assertEquals('buzz',$convertedNumber);
    }
    /**
     * @test
     */
    public function returns_fizzbuzz_for_multiple_of_3_and_multiple_of_5()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(15);

        $this->assertEquals('fizzbuzz',$convertedNumber);
    }




}