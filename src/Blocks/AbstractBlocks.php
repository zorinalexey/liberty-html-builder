<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Blocks;

use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
abstract class AbstractBlocks extends AbstractTag
{

    private function __construct()
    {

    }

    private static array $instances = [];

    public static function instance()
    {
        $class = get_called_class();
        if ( ! isset(self::$instances[$class])) {
            self::$instances[$class] = new static();
        }
        var_dump(self::$instances[$class]);
        return self::$instances[$class];
    }

}
