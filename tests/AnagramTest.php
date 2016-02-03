<?php

use src\Anagram;

class AnagramTest extends PHPUnit_Framework_TestCase {

    private $anagram;
    
    public function setUp() {
        $this->anagram = new Anagram();
    }

    public function testSuitableString() {
        $this->assertTrue($this->anagram->isAnagram('silent', 'listen'));
        $this->assertTrue($this->anagram->isAnagram('I am Lord Voldemort', 'Tom Marvolo Riddle'));
    }

    public function testNotSuitableString() {
        $this->assertFalse($this->anagram->isAnagram('anagram', 'palindrome'));
    }
}