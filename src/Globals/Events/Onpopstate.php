<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onpopstate
{
    /**
     * Сценарий, запускаемый при изменении истории окна
     * @param string $script Сценарий, который будет выполняться на onpopstate
     * @return $this
     */
    public function onpopstate(string $script): self
    {
        $this->attributes['onpopstate'] = $script;
        return $this;

    }
}