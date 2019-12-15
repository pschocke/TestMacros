<?php

namespace pschocke\TestMacros\Macros;

use Illuminate\Foundation\Testing\TestResponse;

class ResourceAsArray
{
    public static $class = TestResponse::class;

    public function __invoke()
    {
        return function () {
            return json_decode($this->content(), true)['data'];
        };
    }
}
