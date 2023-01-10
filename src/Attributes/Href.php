<?php

namespace Liberty\HtmlBuilder\Attributes;

/**
 *
 */
trait Href
{


    /**
     * Указывает URL-адрес страницы, на которую переходит ссылка
     * @param string $href
     * @return $this
     */
    public function href(string $href): self
    {
        $this->attributes['href'] = $href;
        return $this;
    }
}