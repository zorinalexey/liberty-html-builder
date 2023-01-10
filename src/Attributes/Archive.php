<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Archive
{
    /**
     * Атрибут / параметр archive (от англ. "archive" ‒ «архив») ссылается на часто используемые классы и другие ресурсы
     * подлежащих «предварительной загрузке» (внесению в кеш память браузера).
     * «Предварительная загрузка» ресурсов может значительно повысить производительность апплетов.
     * Архивные файлы должны иметь расширение «.zip» (ZIP архив) или «.jar» (Java архив).
     * Относительные URI-адреса для архивов интерпретируются относительно атрибута «codebase».
     * @param string $url В качестве значения указывается разделённый запятыми список URL-адресов архивов.
     * @return $this
     */
    public function archive(string $url): self
    {
        if (!isset($this->attributes['archive'])) {
            $this->attributes['archive'] = $url;
        } else {
            $this->attributes['archive'] = ',' . $url;
        }
        return $this;
    }
}