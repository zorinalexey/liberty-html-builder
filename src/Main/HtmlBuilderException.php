<?php

namespace Liberty\HtmlBuilder\Main;
use Exception;
class HtmlBuilderException extends Exception
{
    public static function methodNotFound($method){
        throw new self('Method '. $method. ' not found.');
    }
}