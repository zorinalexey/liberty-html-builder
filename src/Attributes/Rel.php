<?php

namespace Liberty\HtmlBuilder\Attributes;

use Liberty\HtmlBuilder\Main\Enums;

trait Rel
{
    use Enums;

    /**
     * Указывает связь между текущим документом и связанным документом
     * @param string $rel alternate|author|bookmark|external|help|license|next|nofollow|noopener|noreferrer|prev|search|tag
     * @return $this
     */
    public function rel(string $rel): self
    {
        $data = $this->enums('Rel', $rel);
        if ($data !== null) {
            $this->attributes['rel'] = $data;
        }
        return $this;
    }
}