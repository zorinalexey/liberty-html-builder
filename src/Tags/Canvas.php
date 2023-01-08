<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Height;
use \Liberty\HtmlBuilder\Attributes\Width;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
use \Liberty\HtmlBuilder\Events\Universal AS Events;
use \Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс A
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Canvas extends AbstractTag
{

    use Attributes,
        Events,
        Height,
        Width;

    public function __toString()
    {
        $this->str = '<canvas';
        $this->str .= $this->setTagAttrubutes($this);
        $this->str .= '></canvas>';
        return $this->str;
    }

}
