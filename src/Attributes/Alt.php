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
trait Alt
{

    protected ?string $alt = null;

    /**
     * Альтернативный текст.
     * @param string $value Любая подходящяя текстовая строка
     * @return self
     */
    public function alt(string $value): self
    {
        $this->alt = $value;
        return $this;
    }

}
