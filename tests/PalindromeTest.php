<?php

use src\Palindrome;

class PalindromeTest extends PHPUnit_Framework_TestCase {

    private $palindrome;
    
    public function setUp() {
        $this->palindrome = new Palindrome();
    }

    public function testSuitableString() {
        $this->assertTrue($this->palindrome->check('racecar'));
        $this->assertTrue($this->palindrome->check(151));
        $this->assertTrue($this->palindrome->check('was it a car or a cat i saw'));
    }

    public function testNotSuitableString() {
        $this->assertFalse($this->palindrome->check('some meaningless text'));
    }
}