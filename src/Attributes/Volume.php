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
trait Volume
{

    protected ?int $volume = null;

    /**
     * Задает громкость звучания музыки.
     * @param int $volume Положительное число от 0 до 100.
     * 0 - минимальная громкость,
     * 100 - максимальная громкость
     * @return self
     */
    public function volume(int $volume): self
    {
        if ($volume >= 0 && $volume <= 100) {
            $volume = $volume * 100;
            $this->volume = $volume - 10000;
        }
        return $this;
    }

}
