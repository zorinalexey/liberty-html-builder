<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Name
{
    /**
     * Не поддерживается в HTML5. Использовать глобальный id
     * Задает имя привязки
     * @param string $name section_name
     * @return $this
     */
    public function name(string $name): self
    {
        $this->attributes['name'] = $name;
        return $this;
    }
}