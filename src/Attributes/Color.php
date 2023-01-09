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
trait Color
{

    use Enums;

    protected ?string $color = null;

    /**
     * Устанавливает цвет текста.
     * @param string $color В HTML цвет задается одним из двух путей:
     * с помощью шестнадцатеричного кода и по названию некоторых цветов.
     * Преимущественно используется способ, основанный на шестнадцатеричной
     * системе исчисления, как наиболее универсальный.
     * @return self
     */
    public function color(string $color): self
    {
        $this->color = $this->setEnums('Color', $color);
        if ( ! $this->color) {
            $this->color = $color;
        }
        return $this;
    }

}
