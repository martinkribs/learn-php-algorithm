<?php

namespace learn\src;

$hello = new Solution;
$solution = $hello->lengthOfLongestSubstring("");
print_r($solution);

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $result=null;
        $counter=0;
        if(empty($s)){
            return 0;
        }
        $charArray = str_split($s);

        for ($i=0;$i<count($charArray);$i++) {

            $double = array_search($charArray[$i], array_slice($charArray, $i+1));
            if(!$double===false){

                $resultArray = array_slice($charArray, $i,$double+1);
                if (count($resultArray)>$counter){
                    $counter = count($resultArray);
                }

            } elseif (false==is_bool($double)) {
                $resultArray = array_slice($charArray, $i,$double+1);
                if (count($resultArray)>$counter){
                    $counter = count($resultArray);
                }
            } else {
                $resultArray = array_slice($charArray, $i,$double+1);
                if (count($resultArray)>$counter){
                    $counter = count($resultArray);
                }
            }
        }
        return $counter;
    }
}
?>