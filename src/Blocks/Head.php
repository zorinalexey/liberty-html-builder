<?php

namespace Liberty\HtmlBuilder\Blocks;

use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class Head extends AbstractElement
{
    use Children, GetParent;

    public function __toString(): string
    {
        return $this->stringify('head');
    }

}