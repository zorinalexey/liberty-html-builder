<?php

namespace Liberty\HtmlBuilder\Attributes;

/**
 *
 */
trait Charset
{
    /**
     * Задает набор символов связанного документа
     * @param string $charset char_encoding
     * @return $this
     */
    public function charset(string $charset): self
    {
        $this->attributes['charset'] = $charset;
        return $this;
    }
}