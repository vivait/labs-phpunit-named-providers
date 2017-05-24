<?php

namespace App\Tests;

use App\Adder;
use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    /**
     * @test
     * @dataProvider number_provider
     */
    public function it_adds_two_numbers_together(int $a, int $b, int $result)
    {
        self::assertSame($result, (new Adder)->add($a, $b));
    }

    public function number_provider(): array
    {
        return [
            '2 plus 2'     => [2, 2, 4],
            '2 plus 3'     => [2, 3, 5],
            '1 plus 3'     => [1, 3, 4],
            '123 plus 123' => [123, 123, 246],
        ];
    }
}
