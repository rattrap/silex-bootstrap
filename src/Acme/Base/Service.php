<?php

namespace Acme\Base;

use Silex\Application;

class Service
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

}