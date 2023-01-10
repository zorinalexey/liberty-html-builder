<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Itemscope
{
    /**
     * Вводит в элемент микроданные
     * @param bool $flag
     * @return $this
     */
    public function itemscope(bool $flag = true): self
    {
        if ($flag) {
            $this->attributes['itemscope'] = 'true';
        }
        return $this;
    }
}