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
trait Async
{

    protected ?string $async = null;

    /**
     * При наличии атрибута async браузер при возможности запускает скрипт асинхронно.
     * Это означает, что указанный в атрибуте src файл будет выполняться без ожидания
     * загрузки и отображения веб-страницы. В то же время и страница не ожидает
     * результата выполнения скрипта, а продолжает загружаться как обычно.
     * @param bool $async true - Включить асинхронный режим 
     * @return self
     */
    public function async(bool $async): self
    {
        if ($async) {
            $this->async = 'async';
        }
        return $this;
    }

}
