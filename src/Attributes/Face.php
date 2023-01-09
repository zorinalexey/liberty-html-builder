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
trait Face
{

    protected ?string $face = null;

    /**
     * Определяет гарнитуру шрифта.
     * @param string $face Наименование шрифта или шрифтов разделенных запятыми.
     * @return self
     */
    public function face(string $face): self
    {
        if ( ! $this->face) {
            $this->face .= $face;
        } else {
            $this->face .= ', ' . $face;
        }
        return $this;
    }

}
