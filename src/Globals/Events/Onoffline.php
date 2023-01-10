<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onoffline
{
    /**
     * Атрибут onoffline срабатывает, когда обозреватель начинает работать в автономном режиме.
     * Атрибут onoffline является противоположностью атрибут ononline.
     * @param string $script Сценарий, который будет выполняться на onoffline
     * @return $this
     */
    public function onoffline(string $script): self
    {
        $this->attributes['offline'] = $script;
        return $this;
    }
}