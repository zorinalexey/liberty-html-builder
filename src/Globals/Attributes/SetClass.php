<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait SetClass
{
    /**
     * Указывает одно или несколько классов для элемента (относится к классу в таблице стилей)
     * @param string $class Наименование класса из таблицы стилей
     * @return $this
     */
    public function class(string $class): self
    {
        if (!$this->attributes['class']) {
            $this->attributes['class'] = $class;
        } else {
            $this->attributes['class'] .= ', ' . $class;
        }
        return $this;
    }
}