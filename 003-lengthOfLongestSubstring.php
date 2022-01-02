<?php

use Solution as GlobalSolution;

$hello = new GlobalSolution;
$solution = $hello->lengthOfLongestSubstring("pwwkew");
print_r($solution);

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $result=null;
        $counter=0;
        $charArray = str_split($s);

        //check if array has doubles
        // if not whole array is nice
        //else check each char if it has duplicates and where
        // remember distance between them

        for ($i=0;$i<count($charArray);$i++) {
            # code...

            $double = array_search($charArray[$i], array_slice($charArray, $i+1));
            if(!$double===false){

                $resultArray = array_slice($charArray, $i,$double+1);
                $result = implode($resultArray);
                if (count($resultArray)>$counter){
                    $result = implode($resultArray);
                    $counter = count($resultArray);
                }

            }
        }
        return $result;
    }
}
?>