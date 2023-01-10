<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onpagehide
{
    /**
     * Сценарий для запуска, когда пользователь переходит от страницы
     * @param string $script Сценарий, который будет выполняться на onpagehide
     * @return $this
     */
    public function onpagehide(string $script): self
    {
        $this->attributes['onpagehide'] = $script;
        return $this;
    }
}