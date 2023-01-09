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
trait Id
{

    protected ?string $id = null;

    /**
     * Указывает имя стилевого идентификатора.
     * @param string $id Идентификатор должен обязательно начинаться с латинского
     * символа и может содержать в себе латинские буквы (A–Z, a–z), цифры (0–9),
     * символ дефиса (-) и подчеркивания (_).
     * Использование русских букв в именах идентификатора недопустимо.
     * @return self
     */
    public function id(string $id): self
    {
        $this->id = $id;
        return $this;
    }

}
