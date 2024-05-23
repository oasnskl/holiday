<?php

/*
 * This file is part of the umulmrum/holiday package.
 *
 * (c) Stefan Kruppa
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Umulmrum\Holiday\Test\Provider\Austria;

use Umulmrum\Holiday\Provider\Austria\Vienna;
use Umulmrum\Holiday\Test\Calculator\AbstractHolidayCalculatorTestCase;

final class ViennaTest extends AbstractHolidayCalculatorTestCase
{
    protected function getHolidayProviders(): array
    {
        return [Vienna::class];
    }

    public static function getData(): array
    {
        return [
            [
                2020,
                [
                    '2020-01-01',
                    '2020-01-06',
                    '2020-04-10',
                    '2020-04-12',
                    '2020-04-13',
                    '2020-05-01',
                    '2020-05-21',
                    '2020-05-31',
                    '2020-06-01',
                    '2020-08-15',
                    '2020-10-26',
                    '2020-11-01',
                    '2020-11-15',
                    '2020-12-08',
                    '2020-12-24',
                    '2020-12-25',
                    '2020-12-26',
                    '2020-12-31',
                ],
            ],
        ];
    }
}
