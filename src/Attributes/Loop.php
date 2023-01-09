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
trait Loop
{

    protected ?string $loop = null;

    /**
     * Повторяет воспроизведение с начала после его завершения.
     * @param bool $loop  true - Включить повтор
     * @return self
     */
    public function loop(bool $loop): self
    {
        if ($loop) {
            $this->loop = 'loop';
        }
        return $this;
    }

}
