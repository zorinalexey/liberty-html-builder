<?php

namespace Liberty\HtmlBuilder\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Hreflang
{
    use Enums;

    /**
     * Указывает язык связанного документа
     * @param string $langCode language_code
     * @return $this
     */
    public function hreflang(string $langCode): self
    {
        $this->attributes['hreflang'] = $this->enums('Lang', $langCode);
        return $this;
    }
}