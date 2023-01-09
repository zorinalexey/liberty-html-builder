<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 *@version 0.0.1
 * @package Liberty\HtmlBuilder
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Language
{

    use Enums;

    /**
     * Атрибут language указывает язык написания скрипта. Данный атрибут
     * осуждается, а вместо него следует применять type, который указывает
     * MIME-тип для определенного языка.
     * @param string $scriptLang Атрибут language не чувствителен к регистру и может принимать одно из четырех значений.
     * JavaScript - язык программирования JavaScript. К этому значению часто еще
     * присоединяют номер версии, например — JavaScript1.3.
     * JScript - Разновидность языка JavaScript разработанная компанией Microsoft.
     * Смена названия продиктована тем, что имя JavaScript уже было зарегистрировано,
     * при этом различия между языками состоят не только в названии, но и в подходах.
     * VBS | VBScript - Язык программирования VBScript основанный на Visual Basic.
     * Является детищем Microsoft и поддерживается преимущественно браузером Internet Explorer.
     * @return self
     */
    public function language(string $scriptLang): self
    {
        $this->language = $this->setEnum('ScriptLanguages', $scriptLang);
        return $this;
    }

}
