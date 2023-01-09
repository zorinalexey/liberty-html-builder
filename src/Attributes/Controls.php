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
trait Controls
{

    protected ?string $controls = null;

    /**
     * Добавляет панель управления к аудиофайлу.
     * @param bool $controls true - добавить панель
     * @return self
     */
    public function controls(bool $controls): self
    {
        if ($controls) {
            $this->controls = 'controls';
        }
        return $this;
    }

}
