<?php

namespace App\Http\Controllers\Post;

class BaseController extends Controller
{

    public $service;

    public function __constructor(Service $service)
    {
        $this->service = $service;
    }

}
