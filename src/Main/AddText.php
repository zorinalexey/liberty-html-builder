<?php

namespace Liberty\HtmlBuilder\Main;

trait AddText
{
    /**
     * Добавить простой текст в элемент
     * @param string|AbstractElement $text
     * @return $this
     */
    public function addText(string|AbstractElement $text): self
    {
        $this->content[] = $text;
        return $this;
    }
}