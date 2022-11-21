<?php

namespace App\OpenApi\RequestBodies;

use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Factories\RequestBodyFactory;

class StoreUserRequestBody extends RequestBodyFactory
{
    public function build(): RequestBody
    {
        return RequestBody::create();
    }
}
