<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;
use Deg540\PHPTestingBoilerplate\FizzBuzz;
class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function convert_buzz_for_mod3()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(3);

        $this->assertEquals('fizz',$convertedNumber);
    }
    /**
     * @test
     */
    public function convert_buzz_for_mod5()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(5);

        $this->assertEquals('buzz',$convertedNumber);
    }
    /**
     * @test
     */
    public function convert_buzz_for_mod3_and_mod5()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(15);

        $this->assertEquals('fizzbuzz',$convertedNumber);
    }




}