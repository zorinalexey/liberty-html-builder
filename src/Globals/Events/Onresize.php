<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onresize
{
    /**
     * Атрибут onresize срабатывает при изменении размера окна обозревателя.
     * @param string $script Сценарий, который будет выполняться на onresize
     * @return $this
     */
    public function onresize(string $script): self
    {
        $this->attributes['onresize'] = $script;
        return $this;
    }
}