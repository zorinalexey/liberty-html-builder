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
trait Dir
{

    protected ?string $dir = null;

    /**
     * Задает направление и отображение текста — слева направо или справа налево.
     * @param string $value ltr - Текст отображается как обычно — слева направо.
     * rtl - Текст инвертируется и отображается справа налево.
     * @return self
     */
    public function dir(string $value): self
    {
        if ($value !== 'rtl') {
            $this->dir = 'ltr';
        } else {
            $this->dir = $value;
        }
        return $this;
    }

}
