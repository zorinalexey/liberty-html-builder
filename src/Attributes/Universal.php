<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Id;
use \Liberty\HtmlBuilder\Attributes\Dir;
use \Liberty\HtmlBuilder\Attributes\Lang;
use \Liberty\HtmlBuilder\Attributes\Title;
use \Liberty\HtmlBuilder\Attributes\Style;
use \Liberty\HtmlBuilder\Attributes\Hidden;
use \Liberty\HtmlBuilder\Attributes\SetClass;
use \Liberty\HtmlBuilder\Attributes\TabIndex;
use \Liberty\HtmlBuilder\Attributes\Accesskey;
use \Liberty\HtmlBuilder\Attributes\SpellCheck;
use \Liberty\HtmlBuilder\Attributes\ContextMenu;
use \Liberty\HtmlBuilder\Attributes\ContentEditable;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Universal
{

    use Accesskey,
        SpellCheck,
        TabIndex,
        Style,
        Title,
        Id,
        Hidden,
        Dir,
        Lang,
        ContextMenu,
        ContentEditable,
        SetClass;
}
