<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onblur
{
    /**
     * Атрибут onblur запускает момент, когда элемент теряет фокус.
     * Onblur чаще всего используется с кодом проверки формы (например, когда пользователь покидает поле формы).
     * Атрибут onblur является противоположностью onfocus атрибута.
     * @param string $script Сценарий, который будет выполняться на onblur
     * @return $this
     */
    public function onblur(string $script): self
    {
        $this->attributes['onblur'] = $script;
        return $this;
    }
}