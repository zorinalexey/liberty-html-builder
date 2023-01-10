<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Contextmenu
{
    /**
     * Задает контекстное меню для элемента. Контекстное меню появляется,
     * когда пользователь щелкает правой кнопкой мыши по элементу
     * @param string $idMenu Значение атрибута contextmenu — это идентификатор элемента <menu>, который необходимо открыть.
     * @return $this
     */
    public function contextmenu(string $idMenu): self
    {
        $this->attributes['contextmenu'] = $idMenu;
        return $this;
    }
}