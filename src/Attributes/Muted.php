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
trait Muted
{

    protected ?string $muted = null;

    /**
     * Отключает звук при воспроизведении.
     * @param bool $muted true - отключить звук
     * @return self
     */
    public function muted(bool $muted = false): self
    {
        if ($muted) {
            $this->muted = 'muted';
        }
        return $this;
    }

}
