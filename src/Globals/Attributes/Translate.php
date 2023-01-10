<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Translate
{
    /**
     * Глобальный атрибут / параметр translate (от англ. "translate" ‒ «перевод») используется для указания
     * web-браузеру необходимости перевода текстового содержимого элемента (в том числе и его дочерних элементов)
     * и некоторых его атрибутов.
     * @param bool $flag
     * @return $this
     */
    public function translate(bool $flag = true)
    {
        if ($flag) {
            $this->attributes['translate'] = 'yes';
        }
        return $this;
    }
}