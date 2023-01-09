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
trait Codebase
{

    protected ?string $codebase = null;

    /**
     * Путь к папке с апплетом, который задан атрибутом code.
     * @param string $url Абсолютный или относительный путь к папке, где хранятся файлы с Java-классами.
     * @return self
     */
    public function codebase(string $url): self
    {
        $this->codebase = $url;
        return $this;
    }

}
