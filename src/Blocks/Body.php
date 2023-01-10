<?php

namespace Liberty\HtmlBuilder\Blocks;

use Liberty\HtmlBuilder\Elements\Blocks\A;
use Liberty\HtmlBuilder\Globals\Globals;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class Body extends AbstractElement
{
    use Children, GetParent, Globals;

    public function __toString(): string
    {
        return $this->stringify('body');
    }

    public function a(): A
    {
        return $this->getTag(A::class);
    }
}