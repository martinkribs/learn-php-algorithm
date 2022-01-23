<?php

namespace learn\src;

$hello = new Solution;
$nums1 = [1,2];
$nums2 = [3,4];
$solution = $hello->findMedianSortedArrays($nums1,$nums2);
print_r($solution);

class Solution {

    /**
     * @param array $nums1
     * @param array $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $merged = array_merge($nums1, $nums2);
        $sorted = array_multisort($merged);
        $middle = (count($merged) / 2);
        if (is_int($middle)){
            $total = ($merged[$middle-1]+$merged[$middle])/2;
        } else {
            $total = $merged[$middle-0.5];
        }

        return $total;
    }
}
?>