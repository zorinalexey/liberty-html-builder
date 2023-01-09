<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Accesskey
{

    /**
     * Атрибут accesskey позволяет активировать ссылку с помощью некоторого
     * сочетания клавиш с заданной в коде ссылки буквой или цифрой.
     * @var string|null
     */
    protected ?string $accesskey = null;

    /**
     * Установить активацию ссылки с помощью некоторого сочетания клавиш с
     * заданной буквой или цифрой
     * @param string $keyboardShortcuts
     * @return self
     */
    public function accesskey(string $keyboardShortcuts): self
    {
        $this->accesskey = $keyboardShortcuts;
        return $this;
    }

}
