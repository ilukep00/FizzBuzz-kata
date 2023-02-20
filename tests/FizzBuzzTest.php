<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;
use Deg540\PHPTestingBoilerplate\FizzBuzz;
class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function returns_3_for_fizz()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(3);

        $this->assertEquals('fizz',$convertedNumber);
    }
    /**
     * @test
     */
    public function returns_5_for_buzz()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(5);

        $this->assertEquals('buzz',$convertedNumber);
    }
    /**
     * @test
     */
    public function returns_15_for_fizzbuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $convertedNumber = $fizzBuzz->convert(15);

        $this->assertEquals('fizzbuzz',$convertedNumber);
    }




}