<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт Bordercolor
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Bordercolor
{

    use Enums;

    protected ?string $bordercolor = null;

    /**
     * Определяет цвет видимых границ между фреймами.
     * Цвет родительского элемента FRAMESET может быть изменен с помощью
     * дочернего тега FRAMESET или индивидуального элемента FRAME.
     * @param string $color В HTML цвет задается одним из двух путей:
     * с помощью шестнадцатеричного кода и по названию некоторых цветов.
     * Преимущественно используется способ, основанный на шестнадцатеричной
     * системе исчисления, как наиболее универсальный.
     * @return self
     */
    public function bordercolor(string $color): self
    {
        $this->bordercolor = $this->setEnums('Color', $color);
        if ( ! $this->bordercolor) {
            $this->bordercolor = $color;
        }
        return $this;
    }

}
