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
trait Border
{

    protected ?int $border = null;

    /**
     * Устанавливает толщину границы между фреймами. По умолчанию линия отображается
     * трехмерной, используя атрибуты bordercolor и border можно настроить ее вид по
     * своему усмотрению. Браузеры по-разному интерпретируют атрибуты
     * тега <frameset> и показывают линию.
     * @param int $border Целое положительное число. Значение 0 скрывает рамку.
     * @return self
     */
    public function border(int $border): self
    {
        if ($border >= 0) {
            $this->border = $border;
        }
        return $this;
    }

}
