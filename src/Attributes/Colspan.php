<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Colspan
{
    /**
     * Указывает число столбцов, которые должна охватывать ячейка таблицы
     * @param int $colspan
     * @return $this
     */
    public function colspan(int $colspan = 1): self
    {
        if ($colspan > 0) {
            $this->attributes['colspan'] = $colspan;
        }
        return $this;
    }
}