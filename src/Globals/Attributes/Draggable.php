<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Draggable
{
    /**
     * Атрибут draggable указывает, является ли элемент перетаскиванием или нет.
     * @param bool $value
     * @return $this
     */
    public function draggable(bool $value = true): self
    {
        if ($value) {
            $this->options['draggable'] = 'true';
        }
        return $this;
    }
}