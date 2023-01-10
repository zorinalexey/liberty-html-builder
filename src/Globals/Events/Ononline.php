<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Ononline
{
    /**
     * Атрибут ononline срабатывает, когда браузер начинает работать в Интернете.
     * Атрибут ononline является противоположностью атрибут в onoffline.
     * @param string $script Сценарий, который будет выполняться на ononline
     * @return $this
     */
    public function ononline(string $script): self
    {
        $this->attributes['ononline'] = $script;
        return $this;
    }
}