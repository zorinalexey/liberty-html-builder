<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Alt;
use \Liberty\HtmlBuilder\Attributes\Type;
use \Liberty\HtmlBuilder\Attributes\Shape;
use \Liberty\HtmlBuilder\Attributes\Target;
use \Liberty\HtmlBuilder\Attributes\Coords;
use \Liberty\HtmlBuilder\Attributes\Href;
use \Liberty\HtmlBuilder\Attributes\HrefLang;
use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Events\Universal AS Events;
use \Liberty\HtmlBuilder\Attributes\Universal AS Tags;

/**
 * Класс Area
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Tags
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Area extends AbstractTag
{

    use Events,
        Coords,
        HrefLang,
        Shape,
        Target,
        Href,
        Alt,
        Type,
        Tags;

    public function __toString()
    {
        return $this->stringify('area', false);
    }

}
