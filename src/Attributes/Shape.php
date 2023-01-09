<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * @version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Shape
{

    use Enums;

    protected ?string $shape = null;

    /**
     * Задает форму активной области ссылки для изображений.
     * @param string $shape
     * @return self
     */
    public function shape(string $shape): self
    {
        $this->shape = $this->setEnums('Shape', $shape);
        return $this;
    }

}
