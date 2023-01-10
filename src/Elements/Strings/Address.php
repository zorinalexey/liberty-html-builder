<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Globals\GlobalAttributesAndEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;

class Address extends AbstractElement
{
    use GlobalAttributesAndEvents;

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->stringify('address');
    }
}