<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Dropzone
{
    use Enums;

    /**
     * Атрибут dropzone указывает, копируются ли перемещаемые данные,
     * перемещаются ли они или связаны ли они при удалении элемента.
     * @param bool $dropzone
     * @return $this
     */
    public function dropzone(string $dropzone = 'copy'): self
    {
        $this->attributes['dropzone'] = $this->enums('Dropzone', $dropzone);
        return $this;
    }
}