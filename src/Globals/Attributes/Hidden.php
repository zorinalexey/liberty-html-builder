<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Hidden
{
    /**
     * Глобальный атрибут / параметр hidden (от англ. "hidden" ‒ «скрытый») скрывает содержимое элемента.
     * Элемент с атрибутом «hidden» скрывается от всех устройств вывода (монитор, принтер).
     * CSS свойство «display: block» отменяет действие данного параметра.
     * @param bool $hidden
     * @return $this
     */
    public function hidden(bool $hidden = true): self
    {
        if ($hidden) {
            $this->attributes['hidden'] = true;
        }
        return $this;
    }
}