<?php

namespace learn\tests;

use PHPUnit\Framework\TestCase;
use learn\src\twoSum;

class twoSumTest extends TestCase
{
    public function testOne(): void
    {
        $nums = [2,7,11,15];
        $target = 9;
        $twoSum = new twoSum();
        $this->assertEquals(
            [0,1],
            $twoSum->twoSum($nums,$target)
        );
    }
}
?>