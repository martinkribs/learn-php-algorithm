<?php

namespace learn\tests;

require __DIR__ . "/../src/002-addTwoNumbers.php";

use PHPUnit\Framework\TestCase;
use learn\src\addTwoNumbers;

// Definition for a singly-linked list.
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class addTwoNumbersTest extends TestCase
{
    public function testOne(): void
    {
        $l1= new ListNode();
        $l2= new ListNode();
        $l3 = new ListNode();

        $addTwoNumbers = new addTwoNumbers();

        $this->assertEquals(
            $l3,
            $addTwoNumbers->addTwoNumbers($l1,$l2)
        );
    }
}
?>