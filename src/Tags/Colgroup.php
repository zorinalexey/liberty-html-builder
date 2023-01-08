<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Span;
use \Liberty\HtmlBuilder\Attributes\Align;
use \Liberty\HtmlBuilder\Attributes\Charoff;
use \Liberty\HtmlBuilder\Attributes\Valign;
use \Liberty\HtmlBuilder\Attributes\Width;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс A
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Colgroup extends AbstractTag
{

    use Align,
        Char,
        Span,
        Charoff,
        Valign,
        Width;

    public function __toString()
    {
        return $this->stringify('colgroup', false);
    }

}
