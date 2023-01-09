<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\Type;
use \Liberty\HtmlBuilder\Attributes\Size;
use \Liberty\HtmlBuilder\Attributes\Rel;
use \Liberty\HtmlBuilder\Attributes\Media;
use \Liberty\HtmlBuilder\Attributes\Href;
use \Liberty\HtmlBuilder\Attributes\Charset;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Link extends AbstractTag
{

    use Charset,
        Href,
        Media,
        Rel,
        Size,
        Type;

    public function __toString()
    {
        return $this->stringify('link', false);
    }

}
