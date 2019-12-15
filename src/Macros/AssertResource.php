<?php

namespace pschocke\TestMacros\Macros;

use Illuminate\Foundation\Testing\TestResponse;

class AssertResource
{
    public static $class = TestResponse::class;

    public function __invoke()
    {
        return function ($resource) {
            $this->assertJson($resource->response()->getData(true));
        };
    }
}
