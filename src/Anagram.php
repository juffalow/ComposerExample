<?php

namespace src;

/**
 * An anagram is a type of word play, the result of rearranging
 * the letters of a word or phrase to produce a new word or phrase, using all
 * the original letters exactly once.
 * @link https://en.wikipedia.org/wiki/Anagram Wikipedia/Anagram
 */
class Anagram {
    /**
     * 
     * @param string $str1
     * @param string $str2
     * @return boolean
     */
    public function isAnagram( $str1, $str2 ) {
        return $this->sortString($this->sanitizeString($str1)) === $this->sortString($this->sanitizeString($str2));
    }
    
    /**
     * Removes all spaces and transorms letters to lowercase.
     * @param string $str
     * @return string
     */
    private function sanitizeString( $str ) {
        return \strtolower(\str_replace(' ', '', $str));
    }
    
    /**
     * Sort characters and return them.
     * @param string $str
     * @return string
     */
    private function sortString( $str ) {
        $chars = str_split($str);
        sort($chars);
        return implode('', $chars);
    }
}