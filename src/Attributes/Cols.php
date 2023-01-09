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
trait Cols
{

    protected ?string $cols = null;

    /**
     * Задает размеры или пропорции колонок фреймов в структуре <frameset>.
     * Если создаются несколько колонок, то для атрибута cols необходимо
     * установить определенное значение.
     * @param int ... Значения, перечисленные через запятую     *
     * @return self
     */
    public function cols(): self
    {
        $args = func_get_args();
        $this->cols = implode(', ', $args);
        return $this;
    }

}
