<?php

namespace Liberty\HtmlBuilder\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Shape
{
    use Enums;

    public function shape(string $shape): self
    {
        $this->attributes['shape'] = $this->enums('Shape', $shape);
        return $this;
    }
}