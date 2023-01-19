<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Globals\GlobalAttributesAndEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\GetParent;

class Img extends AbstractElement
{
    use GlobalAttributesAndEvents;
    use GetParent;

    public function __construct(?AbstractElement $parent = null)
    {
        parent::__construct($parent);
        $this->tagName = 'img';
        $this->close = false;
    }
}