<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello']);

Route::add('GET', '/cars', [Controller\Site::class, 'cars']);
