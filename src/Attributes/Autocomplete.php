<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Autocomplete
{
    /**
     * Атрибут autocomplete указывает, должна ли форма или поле ввода иметь автозаполнение.
     * Autocomplete позволяет обозревателю прогнозировать значение. Когда пользователь начинает вводить поле,
     * браузер должен отображать параметры для заполнения поля, основываясь на более ранних типизированных значениях.
     * @param bool|string $value true|on|off
     * @return $this
     */
    public function autocomplete(bool|string $value = true): self
    {
        if ($value === true or strtolower($value) === 'on') {
            $this->attributes['autocomplete'] = 'on';
        } else {
            $this->attributes['autocomplete'] = 'off';
        }
        return $this;
    }
}