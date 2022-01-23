<?php

namespace learn\src;

 // Definition for a singly-linked list.
  class ListNode {
      public $val = 0;
      public $next = null;
      function __construct($val = 0, $next = null) {
          $this->val = $val;
          $this->next = $next;
      }
  }
 
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        (int) $sum=0;
        $l3=NULL;
        $node=&$l3;
        while($l1!=NULL||$l2!=NULL||$sum>0)
        {
            if($l1!=NULL)
            {
                $sum+=$l1->val;
                $l1=$l1->next;
            }
            if($l2!=NULL)
            {
                $sum+=$l2->val;
                $l2=$l2->next;
            }
            $node=new ListNode($sum%10);
            $sum= intdiv($sum,10);
            $node=&$node->next;
        }        
        return $l3;
    }
}

?>