<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Attributes\HttpEquiv;
use \Liberty\HtmlBuilder\Attributes\Content;
use \Liberty\HtmlBuilder\Attributes\Name;
use \Liberty\HtmlBuilder\Attributes\Charset;

/**
 
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Meta extends AbstractTag
{

    use HttpEquiv,
        Content,
        Charset,
        Name;

    public function __toString()
    {
        return $this->stringify('meta', false);
    }

}
