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
trait Charset
{

    protected ?string $charset = null;

    /**
     * Указывает кодировку документа на который ссылается тег <link>.
     * @param string $charset Название кодировки, например UTF-8.
     * @return self
     */
    public function charset(string $charset): self
    {
        $this->charset = strtoupper($charset);
        return $this;
    }

}
