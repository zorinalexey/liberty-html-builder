<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Enums
{

    protected function setEnums(string $enumName, int|string $value): string|null
    {
        $val = strtolower((string)$value);
        $types = require dirname(__FILE__, 2) . SEP . 'Enums' . SEP . $enumName . '.php';
        foreach ($types as $key => $value) {
            if (strtolower((string)$key) === $val OR strtolower((string)$value) === $val) {
                return $value;
            }
        }
        return null;
    }

}
