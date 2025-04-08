<?php

use PHPUnit\Framework\TestCase;

require 'src/Funcoes.php';

class FuncoesTest extends TestCase
{
    public function testIsEven_PositiveEvenNumber()
    {
        $this->assertTrue(Funcoes::isEven(4));
    }

    public function testIsEven_PositiveOddNumber()
    {
        $this->assertFalse(Funcoes::isEven(7));
    }

    public function testIsEven_Zero()
    {
        $this->assertTrue(Funcoes::isEven(0));
    }

    public function testIsEven_NegativeEvenNumber()
    {
        $this->assertTrue(Funcoes::isEven(-2));
    }

    public function testIsEven_NegativeOddNumber()
    {
        $this->assertFalse(Funcoes::isEven(-5));
    }

    public function testFactorial_PositiveNumber()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorial_Zero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorial_NegativeNumber()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-1);
    }

    public function testIsPalindrome_SimplePalindrome()
    {
        $this->assertTrue(Funcoes::isPalindrome("radar"));
    }

    public function testIsPalindrome_CaseInsensitivePalindrome()
    {
        $this->assertTrue(Funcoes::isPalindrome("Radar"));
    }

    public function testIsPalindrome_PalindromeWithSpacesAndPunctuation()
    {
        $this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal: Panama"));
    }

    public function testIsPalindrome_NotAPalindrome()
    {
        $this->assertFalse(Funcoes::isPalindrome("hello"));
    }

}