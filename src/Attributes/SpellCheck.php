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
trait SpellCheck
{

    protected bool|null $spellcheck = null;

    /**
     * Указывает браузеру проверять или нет правописание и грамматику в тексте.
     * Хотя атрибут можно устанавливать практически для всех элементов,
     * результат будет заметен только для полей форм (<input>, <textarea>), а
     * также редактируемых элементов (у них установлен атрибут contenteditable).
     * @param bool $value true - Включает режим проверки правописания.
     * false - Отключает проверку.
     * @return self
     */
    public function spellcheck(bool $value): self
    {
        $this->spellcheck = $value;
        return $this;
    }

}
