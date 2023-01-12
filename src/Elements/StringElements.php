<?php

namespace Liberty\HtmlBuilder\Elements;

use Liberty\HtmlBuilder\Elements\Strings\A;
use Liberty\HtmlBuilder\Elements\Strings\Abbr;
use Liberty\HtmlBuilder\Elements\Strings\Acronym;
use Liberty\HtmlBuilder\Elements\Strings\Address;
use Liberty\HtmlBuilder\Elements\Strings\Applet;

trait StringElements
{
    public function a(): A
    {
        return $this->getTag(A::class);
    }

    public function abbr(): Abbr
    {
        return $this->getTag(Abbr::class);
    }

    public function acronym(): Acronym
    {
        return $this->getTag(Acronym::class);
    }

    public function address(): Address
    {
        return $this->getTag(Address::class);
    }

    public function applet(): Applet
    {
        return $this->getTag(Applet::class);
    }
}