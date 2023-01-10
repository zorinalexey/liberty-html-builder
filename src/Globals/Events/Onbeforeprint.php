<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onbeforeprint
{

    /**
     * Атрибут onbeforeprint срабатывает при печати страницы (до появления диалогового окна Print).
     * Атрибут onbeforeprint часто используется вместе с onafterprint атрибутом.
     * @param string $script Сценарий, запускаемый на onbeforeprint
     * @return $this
     */
    public function onbeforeprint(string $script): self
    {
        $this->attributes['onbeforeprint'] = $script;
        return $this;
    }
}