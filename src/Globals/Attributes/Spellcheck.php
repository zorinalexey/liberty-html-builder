<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Spellcheck
{
    /**
     * Устанавливает или отменяет проверку содержимого элемента на орфографию
     * @param bool $value
     * @return $this
     */
    public function spellcheck(bool $value = true): self
    {
        if ($value) {
            $this->attributes['spellcheck'] = 'true';
        }
        return $this;
    }
}