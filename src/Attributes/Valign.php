<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт Align
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Valign
{

    use Enums;

    protected ?string $valign = null;

    /**
     * Атрибут valign предназначен для размещения заголовка до таблицы или после
     * нее. Этот атрибут работает только в браузере Internet Explorer, а для
     * всех остальных применяется align. Тем не менее, атрибут align корректно
     * действует и для IE, поэтому сочетание атрибутов align и valign необходимо
     * только для этого браузера, когда требуется одновременное выравнивание
     * заголовка по вертикали и горизонтали.
     * @param string $align Значения bottom - Заголовок размещается под таблицей.
     * top - Заголовок размещается перед таблицей.
     * @return self
     */
    public function valign(string $align): self
    {
        $this->valign = $this->setEnums('Align', $align);
        if ($this->valign !== 'bottom' AND $this->valign !== 'top') {
            $this->valign = null;
        }
        return $this;
    }

}
