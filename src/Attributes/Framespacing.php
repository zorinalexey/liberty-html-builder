<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Border
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Framespacing
{

    protected ?int $framespacing = null;

    /**
     * Атрибут framespacing является аналогом border и предназначен для установки
     * размеров границы между фреймами. Причина существования двух разных атрибутов
     * с близкими свойствами в том, что framespacing это более старый атрибут и
     * поддерживается браузерами для совместимости с их ранними версиями.
     * @param int $framespacing Целое положительное число. Значение 0 скрывает рамку.
     * @return self
     */
    public function framespacing(int $framespacing): self
    {
        if ($framespacing >= 0) {
            $this->framespacing = $framespacing;
        }
        return $this;
    }

}
