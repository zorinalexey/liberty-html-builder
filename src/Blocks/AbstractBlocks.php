<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Blocks;

use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс AbstractBlocks
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Blocks
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

    public static function instance(string $class)
    {
        if ( ! isset(self::$instances[$class])) {
            self::$instances[$class] = new $class();
        }
        return self::$instances[$class];
    }

}
