<?php


namespace pschocke\TestMacros\Tests\Macros;


use Illuminate\Http\Resources\Json\Resource;
use Orchestra\Testbench\TestCase;

class AssertResourceTest extends TestCase
{
    /** @test */
    public function it_asserts_the_correct_resource() {
        $this->assertTrue(true);
    }
}
