<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Tags;

use \Liberty\HtmlBuilder\Attributes\Type;
use \Liberty\HtmlBuilder\Attributes\Name;
use \Liberty\HtmlBuilder\Attributes\Value;
use \Liberty\HtmlBuilder\Attributes\Disabled;
use \Liberty\HtmlBuilder\Attributes\Autofocus;
use \Liberty\HtmlBuilder\Attributes\Formaction;
use \Liberty\HtmlBuilder\Attributes\Formmethod;
use \Liberty\HtmlBuilder\Attributes\Formtarget;
use \Liberty\HtmlBuilder\Attributes\Formenctype;
use \Liberty\HtmlBuilder\Attributes\Formnovalidate;
use \Liberty\HtmlBuilder\Attributes\Universal AS Attributes;
use \Liberty\HtmlBuilder\Attributes\Form AS FormAttrubute;
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
final class Button extends AbstractTag
{

    use Formnovalidate,
        FormAttrubute,
        Formenctype,
        Formtarget,
        Attributes,
        Formmethod,
        Formaction,
        Autofocus,
        Disabled,
        Events,
        Value,
        Type,
        Name;

    public function __construct(string|AbstractTag $content = null)
    {
        $this->setContent($content);
    }

    public function __toString()
    {
        return $this->stringify('button');
    }

}
