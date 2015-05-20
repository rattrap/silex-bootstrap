<?php

namespace Acme\HelloWorld\Controllers;

use Silex\Application;

use Acme\Base\Controller;

class Hello extends Controller
{

    public function index($name)
    {

        $service = $this->app['service.generate_message'];
        return $service->execute($name);

    }

}