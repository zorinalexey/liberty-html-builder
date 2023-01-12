<?php

namespace Liberty\HtmlBuilder\Blocks;

use Liberty\HtmlBuilder\Attributes\Alink;
use Liberty\HtmlBuilder\Attributes\Background;
use Liberty\HtmlBuilder\Attributes\Bgcolor;
use Liberty\HtmlBuilder\Attributes\Link;
use Liberty\HtmlBuilder\Attributes\Text;
use Liberty\HtmlBuilder\Attributes\Vlink;
use Liberty\HtmlBuilder\Elements\BlockElements;
use Liberty\HtmlBuilder\Elements\StringElements;
use Liberty\HtmlBuilder\Globals\GlobalAttributesAndEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\AddText;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class Body extends AbstractElement
{
    use Children, GetParent, AddText, GlobalAttributesAndEvents, Alink, Background, Bgcolor, Link, Text, Vlink;

    use StringElements, BlockElements;

    public function __construct(?AbstractElement $parent = null)
    {
        parent::__construct($parent);
        $this->tagName = 'body';
    }

}