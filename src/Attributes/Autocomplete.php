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
trait Autocomplete
{

    protected ?string $autocomplete = null;

    /**
     * Управляет автозаполнением полей форм. Значение может быть перекрыто атрибутом
     * autocomplete у конкретных элементов формы. Автозаполнение производит браузер,
     * который запоминает написанные при первом вводе значения, а затем подставляет
     * их при повторном наборе в поля формы. При этом автозаполнение может быть
     * отключено в настройках браузера и не может быть в таком случае изменено
     * при помощи атрибута autocomplete.
     * @param string $complete Значения on - Включает автозаполнение формы.
     * off - Отключает автозаполнение.
     * Это значение обычно используется для отмены сохранения в браузере важных
     * данных (паролей, номеров банковских карт), а также редко вводимых или
     * уникальных данных (капча).
     * @return self
     */
    public function autocomplete(string $complete): self
    {
        $set = strtolower($complete);
        if ($set === 'on') {
            $this->autocomplete = $set;
        } else {
            $this->autocomplete = 'off';
        }
        return $this;
    }

}
