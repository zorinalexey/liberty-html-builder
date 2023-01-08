<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use Liberty\HtmlBuilder\Attributes\Src;
use Liberty\HtmlBuilder\Attributes\Type;
use Liberty\HtmlBuilder\Attributes\Media;
use Liberty\HtmlBuilder\Tags\AbstractTag;

/**
 * Класс Source
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Tags
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Source extends AbstractTag
{

    use Type,
        Media,
        Src;

    public function __toString()
    {
        $str = '<source';
        $str .= $this->setTagAttrubutes($this);
        $str .= '>';
        return $str;
    }

}
