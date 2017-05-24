<?php

namespace App\Tests;

use App\Multiplier;
use PHPUnit\Framework\TestCase;

class MultiplierTest extends TestCase
{
    /**
     * @test
     * @dataProvider number_provider
     */
    public function it_multiplies_two_numbers_together(int $a, int $b, int $result)
    {
        self::assertSame($result, (new Multiplier)->multiply($a, $b));
    }

    public function number_provider(): array
    {
        return [
            '2 multiplied by 2'     => [2, 2, 4],
            '2 multiplied by 3'     => [2, 3, 6],
            '1 multiplied by 3'     => [1, 3, 3],
            '123 plus 123' => [123, 123, 15129],
        ];
    }
}
