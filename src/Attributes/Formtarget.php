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
trait Formtarget
{

    use Enums;

    protected ?string $formtarget = null;

    /**
     *
     * @param string $target В качестве значения используется имя окна или фрейма,
     * заданное атрибутом name. Если установлено несуществующее имя, то будет
     *  открыто новое окно. В качестве зарезервированных имен можно указывать следующие.
     * _blank - Загружает страницу в новое окно браузера.
     * _self - Загружает страницу в текущее окно.
     * _parent - Загружает страницу во фрейм-родитель, если фреймов нет,
     * то это значение работает как _self.
     * _top - Отменяет все фреймы и загружает страницу в полном окне браузера,
     * если фреймов нет, то это значение работает как _self.
     * @return self
     */
    public function formtarget(string $target): self
    {
        $this->formtarget = $this->setEnums('Target', $target);
        return $this;
    }

}
