<?php

namespace Liberty\HtmlBuilder\Attributes;

trait AcceptCharset
{
    /**
     * Атрибут accept-charset задает кодировки символов, которые должны использоваться для отправки формы.
     * Значением по умолчанию является зарезервированная строка "UNKNOWN" (указывает, что кодировка соответствует
     * кодировке документа, содержащего элемент <form>).
     * @param string $charset
     * @return $this
     */
    public function acceptCharset(string $charset): self
    {
        $this->attributes['accept-charset'] = $charset;
        return $this;
    }
}