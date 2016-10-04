<?php

use src\Anagram;

class AnagramTest extends PHPUnit_Framework_TestCase {

    private $anagram;

    public function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(TRUE);
        return $method->invokeArgs($object, $parameters);
    }

    public function setUp() {
        $this->anagram = new Anagram();
    }

    public function testSanitizeString() {
	$value = $this->invokeMethod($this->anagram, 'sanitizeString', ['Foo bAr bAZ']);
 	$this->assertEquals('foobarbaz', $value);
    }

    public function testSortString() {
	$value = $this->invokeMethod($this->anagram, 'sortString', ['c b a x']);
	$this->assertEquals('   abcx', $value);
    }

    public function testSuitableString() {
        $this->assertTrue($this->anagram->isAnagram('silent', 'listen'));
        $this->assertTrue($this->anagram->isAnagram('I am Lord Voldemort', 'Tom Marvolo Riddle'));
    }

    public function testNotSuitableString() {
        $this->assertFalse($this->anagram->isAnagram('anagram', 'palindrome'));
    }
}
