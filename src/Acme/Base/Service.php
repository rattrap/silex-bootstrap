<?php

namespace Acme\Base;

use Silex\Application;

abstract class Service
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

    abstract public function execute();

}