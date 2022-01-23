<?php

namespace learn\src;

$tests=[
    "abcabcbb" => 3,
    "bbbbb" => 1,
    "pwwkew" => 3,
    "" => 0,
    " " => 1,
    "au" => 2,
    "dvdf" => 3,
    "abba" => 2
];

$hello = new Solution;
foreach ($tests as $test => $value) {
    $solution = $hello->lengthOfLongestSubstring($test);
    if ($solution==$value){
        print_r("Test '". $test. "' erfolgreich! \n");
    } else {
        print_r("[ERROR] Test '". $test. "' fehlgeschlagen \n");
    }
    Print("\n");
}

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {

        // Length of the given input string
        $n = strlen($s);

        //string to array
        $arr = str_split($s);

        // Length of longest substring
        $result=0;

        // Map to store visited characters along with their index
        $charIndexMap=array();

        // start indicates the start of current substring
        $start=0;

        // Iterate through the string and slide the window each time you find a duplicate
        // end indicates the end of current substring
        for ($end = 0; $end < $n; $end++ ){

            // Check if the current character is a duplicate
            $isDuplicate = array_key_exists($arr[$end],$charIndexMap);
            if ($isDuplicate) {
                $duplicateIndex = $charIndexMap[$arr[$end]];
                // Update the result for the substring in the current window before we found duplicate character
                $result = max($result, $end-$start);

                // Remove all characters before the new
                for ($i = $start; $i <= $duplicateIndex; $i++) {
                    $key = $s[$i];
                    unset($charIndexMap[$key]);
                } 

                // Slide the window since we have found a duplicate character
                $start = $duplicateIndex + 1;
            }
            // Add the current character to hashmap
            $charIndexMap[$arr[$end]] = $end;
        }
        // Update the result for last window
        // For a input like "abc" the execution will not enter the above if statement for checking duplicates
        $result = max($result, $n-$start);

        return $result;
    }
}
?>