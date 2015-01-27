<?php

namespace acuthbert\test;

use Rhubarb\Crown\Module;
use Rhubarb\Crown\UrlHandlers\ClassMappedUrlHandler;

class MyAppModule extends Module
{
    protected function registerUrlHandlers()
    {
        parent::registerUrlHandlers();

        $this->addUrlHandlers(
            [
                "/" => new ClassMappedUrlHandler( "acuthbert\\test\\Index" )
            ]
        );
    }
}

include_once( "settings/site.config.php" );

Module::registerModule( new MyAppModule() );