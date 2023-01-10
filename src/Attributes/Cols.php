<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Cols
{
    /**
     * Определяет видимую ширину текстовой области
     * @param int $cols цвет кода css
     * @return $this
     */
    public function cols(int $cols): self
    {
        if ($cols > 0) {
            $this->attributes['cols'] = $cols;
        }
        return $this;
    }
}