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
trait Rows
{

    protected ?string $rows = null;

    /**
     * Задает высоту или пропорции фреймов в структуре <frameset> в виде строк.
     * Если создаются несколько строк, то для атрибута rows необходимо
     * установить определенное значение.
     * @param int ... Значения, перечисленные через запятую     *
     * @return self
     */
    public function rows(): self
    {
        $args = func_get_args();
        $this->rows = implode(', ', $args);
        return $this;
    }

}
