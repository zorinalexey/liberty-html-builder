<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Globals\Globals;

class Address extends \Liberty\HtmlBuilder\Main\AbstractElement
{
    use Globals;

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->stringify('address');
    }
}