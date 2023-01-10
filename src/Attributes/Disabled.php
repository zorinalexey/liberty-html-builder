<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Disabled
{
    /**
     * Указывает, что указанный элемент/Группа элементов должна быть отключена
     * @param bool $disabled
     * @return $this
     */
    public function disabled(bool $disabled = true): self
    {
        if ($disabled) {
            $this->attributes['disabled'] = true;
        }
        return $this;
    }
}