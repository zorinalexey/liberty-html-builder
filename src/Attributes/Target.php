<?php

namespace Liberty\HtmlBuilder\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Target
{
    use Enums;

    /**
     * Указывает, где открыть связанный документ
     * @param string $target _blank|_parent|_self|_top|blank|parent|self|top|имя фрейма
     * @return $this
     */
    public function target(string $target): self
    {
        $this->attributes['target'] = $this->enums('Target', $target);
        if (!$this->attributes['target']) {
            $this->attributes['target'] = $target;
        }
        return $this;

    }
}