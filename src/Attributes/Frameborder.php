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
trait Frameborder
{

    protected ?string $frameborder = null;

    /**
     * Определяет, показывать границу между фреймами или нет.
     * Браузер Opera в любом случае демонстрирует тонкую линию, если не используется false
     * @param bool $border true или 1 для отображения границы и false или 0, чтобы ее скрыть.
     * @return self
     */
    public function frameborder(bool|int $border): self
    {
        if ((bool)$border) {
            $this->frameborder = 'yes';
        } else {
            $this->frameborder = 'no';
        }
        return $this;
    }

}
