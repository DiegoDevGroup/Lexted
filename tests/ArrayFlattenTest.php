<?php

namespace Ddg\Test;

use PHPUnit\Framework\TestCase;

class ArrayFlattenTest extends TestCase
{
    /**
     * @test
     */
    public function it_flattens_an_array()
    {
        $this->assertEquals(
            ['a', 'b'],
            array_flatten(['a', ['b']])
        );
    }

    /**
     * @test
     */
    public function it_recursively_flattens_an_array()
    {
        $this->assertEquals(
            ['a', 'b', 'c', 'd', 'e'],
            array_flatten(['a', ['b', ['c'], 'd'], 'e'])
        );
    }

    /**
     * @test
     */
    public function it_recursively_flattens_an_array_to_a_certain_level()
    {
        $this->assertEquals(
            ['a', 'b', ['c'], 'd', 'e'],
            array_flatten(['a', ['b', ['c'], 'd'], 'e'], 1)
        );
    }
}
