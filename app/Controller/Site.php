<?php

namespace Controller;

use Src\View;
use Src\Request;
use Src\Auth\Auth;
use Src\Validator\Validator;
use Model\Cars;
use  Carbon\Carbon;

class Site
{
    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Автостоянка']);
    }

    public function cars(): string
    {
        $cars = Cars::all();
        return new View('site.cars', ['cars' => $cars]);
    }
}
