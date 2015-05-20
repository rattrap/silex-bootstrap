<?php

namespace Acme\HelloWorld\Controllers;

use Silex\Application;

class Hello
{

    /**
     * @var Application $app
     */
    protected $app;

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function index($name)
    {

        $service = $this->app['service.generate_message'];
        return $service->execute($name);

    }

}