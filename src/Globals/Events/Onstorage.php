<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onstorage
{
    /**
     * Сценарий, запускаемый при обновлении области веб-хранилища
     * @param string $script Сценарий, который будет выполняться на onstorage
     * @return $this
     */
    public function onstorage(string $script): self
    {
        $this->attributes['onstorage'] = $script;
        return $this;
    }
}