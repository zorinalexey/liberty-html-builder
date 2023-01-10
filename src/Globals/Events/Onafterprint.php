<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onafterprint
{
    /**
     * Атрибут onafterprint срабатывает, когда страница начала печататься, или если диалоговое окно печати было закрыто.
     * Атрибут onafterprint часто используется вместе с onbeforeprint атрибутом.
     * @param string $script Сценарий, запускаемый на онафтерпринт
     * @return $this
     */
    public function onafterprint(string $script): self
    {
        $this->attributes['onafterprint'] = $script;
        return $this;
    }
}