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
trait Coords
{

    protected ?string $coords = null;

    /**
     * Устанавливает координаты активной области.
     * @return self
     */
    public function coords(): self
    {
        $args = func_get_args();
        $this->coords = implode(',', $args);
        return $this;
    }

}
