<?php

namespace Liberty\HtmlBuilder\Globals\Attributes;

trait Title
{
    /**
     * Глобальный атрибут / параметр title (от англ. "title" ‒ «название, заглавие, надпись») указывает текстовую
     * подсказку для элемента, которая всплывает, когда на элемент наводиться курсор указателя.
     * @param string $title
     * @return $this
     */
    public function title(string $title): self
    {
        $this->attributes['title'] = $title;
        return $this;
    }
}