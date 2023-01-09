<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait AcceptCharset
{

    /**
     * Устанавливает кодировку, в которой сервер может принимать и обрабатывать данные.
     * @param string $charset
     * @return self
     */
    public function acceptCharset(string $charset = 'UTF-8'): self
    {
        $this->{'accept-charset'} = strtoupper($charset);
        return $this;
    }

}
