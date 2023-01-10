<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Ping
{
    /**
     * Указывает список URL-адресов, разделенных пробелами, к которым, после ссылки, запросы POST с телом ping будут
     * отправляться браузером (в фоновом режиме). Обычно используется для отслеживания.
     * @param string $url list_of_URLs
     * @return $this
     */
    public function ping(string $url): self
    {
        if (!isset($this->attributes['ping'])) {
            $this->attributes['ping'] = $url;
        } else {
            $this->attributes['ping'] .= '' . $url;
        }
        return $this;

    }
}