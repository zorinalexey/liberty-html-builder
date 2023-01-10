<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Action
{
    /**
     * Указывает, куда отправлять форму-данные при отправке формы
     * @param string $url URL адрес страницы
     * @return $this
     */
    public function action(string $url): self
    {
        $this->attributes['action'] = $url;
        return $this;
    }
}