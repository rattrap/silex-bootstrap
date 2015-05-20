<?php

namespace Acme\HelloWorld\Services;

use Silex\Application;

class GenerateMessage
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

    public function execute($name)
    {

        return 'Hello, ' . $this->app->escape($name) . '!';

    }

}