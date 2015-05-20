<?php

namespace Acme\HelloWorld;

use Silex\Application;
use Silex\ServiceProviderInterface;

use Acme\HelloWorld\Services\GenerateMessage;

class Provider implements ServiceProviderInterface
{

    /**
     * Register services here.
     *
     * @param Application $app
     */
    public function register(Application $app)
    {

        $app['service.generate_message'] = $app->share(function () use ($app) {

            return new GenerateMessage($app);

        });

    }

    /**
     * Configure the application and *carefully* use services.
     *
     * @param Application $app
     */
    public function boot(Application $app)
    {

        $app->mount('/', new ControllerProvider());

    }

}