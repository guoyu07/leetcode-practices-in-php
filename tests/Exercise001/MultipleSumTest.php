<?php

namespace Edentsai\LeetCode\Tests\Exercise001;

use Edentsai\LeetCode\Tests\TestCase;
use Edentsai\LeetCode\Exercise001\MultipleSum;

class MultipleSumTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testMultipleSumShouldThrowInvalidArgumentExceptionWhenNumbersAreEmpty()
    {
        $amount = 999;
        $target = 999;
        $numbers = [];

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testOneSumShouldThrowInvalidArgumentExceptionWhenCannotBeSolved()
    {
        $amount = 999;
        $target = 999;
        $numbers = [1, 2, 3];

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);
    }

    public function oneSumDataProvider() : array
    {
        return [
            [
                'target' => 5,
                'numbers' => [1, 3, 5, 7],
                'expected' => [2],
            ],
            [
                'target' => 7,
                'numbers' => [1, 3, 5, 7],
                'expected' => [3],
            ],
            [
                'target' => 1,
                'numbers' => [1, 3, 5, 7],
                'expected' => [0],
            ],
        ];
    }

    /**
     * @dataProvider oneSumDataProvider
     */
    public function testOneSumShouldReturnArrayWithAnswerWhenSolved(int $target, array $numbers, array $expected)
    {
        $amount = 1;

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);

        $this->assertSame($expected, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTwoSumShouldThrowInvalidArgumentExceptionWhenCannotBeSolved()
    {
        $amount = 2;
        $target = 999;
        $numbers = [2, 7, 11, 15];

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);
    }

    public function twoSumDataProvider() : array
    {
        return [
            [
                'target' => 9,
                'numbers' => [2, 7, 11, 15],
                'expected' => [0, 1],
            ],
            [
                'target' => 13,
                'numbers' => [2, 7, 11, 15],
                'expected' => [0, 2],
            ],
            [
                'target' => 17,
                'numbers' => [2, 7, 11, 15],
                'expected' => [0, 3],
            ],
            [
                'target' => 18,
                'numbers' => [2, 7, 11, 15],
                'expected' => [1, 2],
            ],
            [
                'target' => 22,
                'numbers' => [2, 7, 11, 15],
                'expected' => [1, 3],
            ],
            [
                'target' => 26,
                'numbers' => [2, 7, 11, 15],
                'expected' => [2, 3],
            ],
        ];
    }

    /**
     * @dataProvider twoSumDataProvider
     */
    public function testTwoSumShouldReturnArrayWithAnswerWhenSolved(int $target, array $numbers, array $expected)
    {
        $amount = 2;

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);

        $this->assertSame($expected, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThreeSumShouldThrowInvalidArgumentExceptionWhenCannotBeSolved()
    {
        $amount = 3;
        $target = 999;
        $numbers = [15,7, 2, 11, 6];

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);
    }

    public function threeSumDataProvider() : array
    {
        return [
            [
                'target' => 24,
                'numbers' => [15, 7, 2, 11, 6],
                'expected' => [0, 1, 2],
            ],
            [
                'target' => 20,
                'numbers' => [15, 7, 2, 11, 6],
                'expected' => [1, 2, 3],
            ],
            [
                'target' => 19,
                'numbers' => [15, 7, 2, 11, 6],
                'expected' => [2, 3, 4],
            ],
            [
                'target' => 23,
                'numbers' => [15, 7, 2, 11, 6],
                'expected' => [0, 2, 4],
            ],
        ];
    }

    /**
     * @dataProvider threeSumDataProvider
     */
    public function testThreeSumShouldReturnArrayWithAnswerWhenSolved(int $target, array $numbers, array $expected)
    {
        $amount = 3;

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);

        $this->assertSame($expected, $actual);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testFiveSumShouldThrowInvalidArgumentExceptionWhenCannotBeSolved()
    {
        $amount = 5;
        $target = 999;
        $numbers = [159, 3, 40, 10, 20, 5, 80, 1];

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);
    }

    public function testFiveSumShouldReturnArrayWithAnswerWhenSolved()
    {
        $amount = 5;
        $target = 178;
        $numbers = [159, 3, 40, 10, 20, 5, 80, 1];
        $expected = [0, 1, 3, 5, 7];

        $multipleSum = new MultipleSum();
        $actual = $multipleSum->solve($amount, $target, $numbers);

        $this->assertSame($expected, $actual);
    }
}
