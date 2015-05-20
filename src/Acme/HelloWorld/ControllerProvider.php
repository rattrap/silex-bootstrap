<?php

namespace Acme\HelloWorld;

use Silex\Application;
use Silex\ControllerProviderInterface;

use Acme\HelloWorld\Controllers\Hello;

class ControllerProvider implements ControllerProviderInterface
{

    /**
     * Register our routes
     *
     * @param Application $app
     * @return null
     */
    public function connect(Application $app)
    {

        // Controllers
        $app['controller.hello'] = function() use ($app) {

            return new Hello($app);

        };

        $controllers = $app['controllers_factory'];

        // Define our routes
        $controllers->get('/hello/{name}', 'controller.hello:index');

        return $controllers;

    }

}