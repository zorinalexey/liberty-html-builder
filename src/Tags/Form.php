<?php

declare(strict_types = 1);

use \Liberty\HtmlBuilder\Tags\AbstractTag;
use \Liberty\HtmlBuilder\Blocks\Universal AS Blocks;
use \Liberty\HtmlBuilder\Attributes\Name;
use Liberty\HtmlBuilder\Attributes\AcceptCharset;
use Liberty\HtmlBuilder\Attributes\Action;
use Liberty\HtmlBuilder\Attributes\Autocomplete;
use Liberty\HtmlBuilder\Attributes\Enctype;
use Liberty\HtmlBuilder\Attributes\Method;
use Liberty\HtmlBuilder\Attributes\Name;
use Liberty\HtmlBuilder\Attributes\Novalidate;
use Liberty\HtmlBuilder\Attributes\Target;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class Form extends AbstractTag
{

    use Blocks,
        Action,
        AcceptCharset,
        Name,
        Method,
        Enctype,
        Autocomplete,
        Target,
        Novalidate,
        Attributes;

    public function __toString()
    {
        return $this->stringify('form');
    }

}
