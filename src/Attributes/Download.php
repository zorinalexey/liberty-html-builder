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
trait Download
{

    protected ?string $download = null;

    /**
     * Предлагает скачать указанный по ссылке файл.
     * @param bool $set
     * @return self
     */
    public function download(bool $set): self
    {
        if ($set) {
            $this->download = 'download';
        }
        return $this;
    }

}
