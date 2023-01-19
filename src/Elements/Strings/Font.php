<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Attributes\Color;
use Liberty\HtmlBuilder\Attributes\Face;
use Liberty\HtmlBuilder\Attributes\Size;
use Liberty\HtmlBuilder\Elements\StringElements;
use Liberty\HtmlBuilder\Globals\GlobalAttributesAndEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\AddText;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class Font extends AbstractElement
{

    use Color, Size, Face;

    use Children, GetParent, StringElements, AddText, GlobalAttributesAndEvents;

    public function __construct(?AbstractElement $parent = null)
    {
        parent::__construct($parent);
        $this->tagName = 'font';
    }
}