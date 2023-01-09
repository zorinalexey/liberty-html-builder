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
trait Size
{

    protected ?int $size = null;

    /**
     * Задает размер шрифта в условных единицах.
     * @param int $size Значение может быть от 1 до 7.
     * Размер шрифта можно указывать как абсолютной величиной (например, size="4"),
     * так и относительной (например, size="+1", size="-1").
     * В последнем случае размер изменяется относительно базового.
     * @return self
     */
    public function size(int $size = 3): self
    {
        if ($size > 7) {
            $size = 7;
        }
        if ($size === 0) {
            $size = 1;
        }
        $this->size = $size;
        return $this;
    }

}
