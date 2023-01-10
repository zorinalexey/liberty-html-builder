<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onerror
{
    /**
     * Атрибут onerror срабатывает при возникновении ошибки при загрузке внешнего файла
     * (например, документа или изображения).
     * @param string $script Сценарий, запускаемый на onerror
     * @return $this
     */
    public function onerror(string $script): self
    {
        $this->attributes['onerror'] = $script;
        return $this;
    }

}