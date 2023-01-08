<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Shape
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Shape
{

    protected ?string $shape = null;

    /**
     * Задает форму активной области ссылки для изображений.
     * @param string $shape
     * @return self
     */
    public function shape(string $shape): self
    {
        $this->shape = match ($shape) {
            'circle' => 'circle',
            'poly' => 'poly',
            'rect' => 'rect',
            default => 'default'
        };
        return $this;
    }

}
