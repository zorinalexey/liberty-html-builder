<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Elements\StringElements;
use Liberty\HtmlBuilder\Globals\Attributes\Dir;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\AddText;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class Bdo extends AbstractElement
{
    use Children, GetParent, StringElements, AddText, Dir;

    public function __construct(?AbstractElement $parent = null)
    {
        parent::__construct($parent);
        $this->tagName = 'bdo';
    }
}