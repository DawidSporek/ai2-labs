<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public static function dataGetFahrenheit(): array
    {
        return [
            ['15.5', '59.9'],
            ['-20', '-4'],
            ['0', '32'],
            ['36.6', '97.88'],
            ['-100', '-148'],
            ['0.5', '32.9'],
            ['100', '212'],
            ['-5.5', '22.1'],
            ['22', '71.6'],
            ['-15', '5'],
        ];
    }

    #[DataProvider('dataGetFahrenheit')]
    public function testGetFahrenheit(string $celsius, string $expectedFahrenheit): void
    {
        $measurement = new Measurement();
        $measurement->setCelsius($celsius);

        $this->assertEquals((float) $expectedFahrenheit, $measurement->getFahrenheit());
    }
}
