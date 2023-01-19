<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Attributes\Color;
use Liberty\HtmlBuilder\Attributes\Face;
use Liberty\HtmlBuilder\Attributes\Size;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\GetParent;

class Basefont extends AbstractElement
{
    use GetParent, Color, Face, Size;

    public function __construct(?AbstractElement $parent = null)
    {
        parent::__construct($parent);
        $this->tagName = 'basefont';
        $this->close = false;
    }
}