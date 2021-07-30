<?php

namespace App;

use Bootstrap\Bootstrap;

class Init extends Bootstrap
{
    protected function routes()
    {
        $routes['home'] = ['route'=>'/', 'controller'=>'index', 'action'=>'index'];
        $routes['videos-index'] = ['route'=>'/videos', 'controller'=>'video', 'action'=>'index'];
        $routes['videos-show'] = ['route'=>'/videos/show', 'controller'=>'video', 'action'=>'show'];
        $this->setRoutes($routes);
    }
}