<?php

namespace acuthbert\test;

use Rhubarb\Crown\Response\GeneratesResponse;

class Index implements GeneratesResponse
{
    public function generateResponse($request = null)
    {
        return "<p>Some output</p>";
    }
}