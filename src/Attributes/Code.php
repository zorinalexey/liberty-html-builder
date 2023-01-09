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
trait Code
{

    protected ?string $code = null;

    /**
     * Имя файла.
     * @param string $code Имя файла с расширением .class.
     * Если расширение не указано (например: code="clock"),
     * то браузер добавит расширение автоматически.
     * @return self
     */
    public function code(string $code): self
    {
        $this->code = $code;
        return $this;
    }

}
