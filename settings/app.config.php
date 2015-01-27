<?php

namespace acuthbert\test;

require_once "vendor/rhubarbphp/rhubarb/src/UrlHandlers/ClassMappedUrlHandler.php";
require_once "src/Layouts/DefaultLayout.php";

use Rhubarb\Crown\Layout\LayoutModule;
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

    protected function registerDependantModules()
    {
        Module::registerModule( new LayoutModule( '\acuthbert\test\Layouts\DefaultLayout' ) );
    }
}

include_once( "settings/site.config.php" );

Module::registerModule( new MyAppModule() );