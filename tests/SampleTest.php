<?php

namespace Tests;

use Mouson\Template\Sample;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    protected function setUp(): void
    {
    }

    protected function tearDown(): void
    {
    }

    public function test_same_category_no_point()
    {
        $sample = new Sample();
        $actual = $sample->parser('Amy:1 2 3 4  Lin:5 2 4 3');
        $expected = 'Tie.';

        $this->assertEquals($expected, $actual);
    }

    public function test__lin_wins_allthesamekind_amy_3333_lin_5555()
    {
        $sample = new Sample();
        $actual = $sample->parser('Amy:3 3 3 3  Lin:5 5 5 5');
        $expected = 'Lin wins, all the same kind:5';

        $this->assertEquals($expected, $actual);
    }
    public function test_tie_allthesamekind_amy_1111_lin_1111()
    {
        $sample = new Sample();
        $actual = $sample->parser('Amy:1 1 1 1  Lin:1 1 1 1');
        $expected = 'Tie.';

        $this->assertEquals($expected, $actual);
    }

    public function test_lin_win_normal_point()
    {
        $sample = new Sample();
        $actual = $sample->parser('Amy:1 1 1 1  Lin:1 1 1 1');
        $expected = 'Tie.';

        $this->assertEquals($expected, $actual);
    }

}
