<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Controls
{
    /**
     * Атрибут controls является логическим атрибутом.
     * При наличии, он указывает, что аудио/видео элементы controls должны отображаться.
     * @param bool $flag
     * @return $this
     */
    public function controls(bool $flag = true): self
    {
        if ($flag) {
            $this->attributes['controls'] = $flag;
        }
        return $this;
    }
}