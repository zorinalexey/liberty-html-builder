<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onmessage
{
    /**
     * Сценарий, запускаемый при срабатывании сообщения
     * @param string $script Сценарий, запускаемый при срабатывании сообщения
     * @return $this
     */
    public function onmessage(string $script): self
    {
        $this->attributes['onmessage'] = $script;
        return $this;
    }
}