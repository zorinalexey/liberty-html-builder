<?php

namespace Liberty\HtmlBuilder\Blocks;

use Liberty\HtmlBuilder\Elements\Strings\A;
use Liberty\HtmlBuilder\Globals\GlobalAttributesAndEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class Body extends AbstractElement
{
    use Children, GetParent, GlobalAttributesAndEvents;

    public function __toString(): string
    {
        return $this->stringify('body');
    }

    public function a(): A
    {
        return $this->getTag(A::class);
    }
}