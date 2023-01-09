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
trait Scrolling
{

    protected ?string $scrolling = null;

    /**
     * Если содержимое фрейма не помещается в отведенное окно, автоматически
     * появляются полосы прокрутки для просмотра информации. В некоторых случаях,
     * полосы прокрутки нарушают дизайн веб-страницы, поэтому от них можно отказаться.
     * Для управления отображением полос прокрутки используется атрибут scrolling.
     * @param string $scroll auto - Полосы прокрутки добавляются браузером только
     * по необходимости, в том случае, когда содержимое фрейма превышает его видимую часть.
     * no - Запрещает отображение полос прокрутки.
     * yes - Всегда вызывает появление полос прокрутки, независимо от объема информации.
     * @return self
     */
    public function scrolling(string $scroll): self
    {
        if ($scroll === 'auto' OR $scroll === 'on' OR $scroll === 'yes') {
            $this->scrolling = $scroll;
        }
        return $this;
    }

}
