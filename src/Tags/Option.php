<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Disabled;
use \Liberty\HtmlBuilder\Attributes\Selected;
use \Liberty\HtmlBuilder\Attributes\Label;
use \Liberty\HtmlBuilder\Attributes\Value;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
use \Liberty\HtmlBuilder\Events\Event;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Option extends AbstractTag
{

    use Value,
        Label,
        Disabled,
        Selected,
        Attributes,
        Event;

    public function __construct(string|null|AbstractTag $content = null)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('code');
    }

}
