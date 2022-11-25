<?php

namespace learn\tests;

require __DIR__ . "/../src/001-twoSum.php";

use learn\src\twoSum;
use PHPUnit\Framework\TestCase;

class twoSumTest extends TestCase
{
    public function testOne(): void
    {
        $nums = [2, 7, 11, 15];
        $target = 9;
        $twoSum = new twoSum();
        $this->assertEquals(
            [0, 1],
            $twoSum->twoSum($nums, $target)
        );
    }
}

?>