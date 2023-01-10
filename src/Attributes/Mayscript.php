<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Mayscript
{
    /**
     * Создаёт возможность работы апплета с функциями JavaScript.
     * @param bool $value
     * @return $this
     */
    public function mayscript(bool $value = true): self
    {
        if ($value) {
            $this->attributes['mayscript'] = 'true';
        } else {
            $this->attributes['mayscript'] = 'false';
        }
        return $this;
    }
}