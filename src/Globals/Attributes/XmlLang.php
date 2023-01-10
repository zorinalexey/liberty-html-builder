<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait XmlLang
{
    use Enums;

    public function xmlLang(string $lang): self
    {
        $this->attributes['xml:lang'] = $this->enums('Lang', $lang);
        return $this;
    }
}