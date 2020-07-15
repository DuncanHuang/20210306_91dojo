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

    /**
     * @test
     */
    public function testSample(): void
    {
        $this->assertTrue((new Sample())->isTrue());
    }
}
