<?php

namespace Liberty\HtmlBuilder\Main;

trait Text
{
    /**
     * Добавить простой текст в элемент
     * @param string|AbstractElement $text
     * @return $this
     */
    public function text(string|AbstractElement $text): self
    {
        $this->content[] = $text;
        return $this;
    }
}