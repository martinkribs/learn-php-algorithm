<?php

namespace learn\src;

class twoSum {

    /**
    * @param Int[] $nums
    * @param Int $target
    * @return Int[]
    */
    public function twoSum($nums, $target) {
        $indexMap=array();
        for($i = 0; $i < count($nums); $i++){
            $requiredNum = $target - $nums[$i];
            if(in_array($requiredNum, $indexMap)){
                $toReturn = array_search($requiredNum, $nums);
                $array=array($i,$toReturn);
                sort($array);
                return $array;
            } else {
                $indexMap[$i]=$nums[$i];
            }
        }
    }
}
?>