<?php

/**
* Given a string s, return the longest palindromic substring in s.
*/

#namespace
namespace learn\src;

#here are the tests
$tests=[
    "babad" => "bab",
    "cbbd" => "bb"
];

#intiate object
$hello = new longestPalindrome;

#going through each test case
foreach ($tests as $test => $value) {
    $solution = $hello->longestPalindrome($test);
    if ($solution==$value){
        print_r("Test '". $test. "' erfolgreich! \n");
    } else {
        print_r("[ERROR] Test '". $test. "' fehlgeschlagen \n");
    }
    Print("\n");
}

#class
class longestPalindrome {

     /**
     * @param String $s
     * @return String
     */
    function longestPalindrome(string $s): string
    {
        return "";
    }
}
