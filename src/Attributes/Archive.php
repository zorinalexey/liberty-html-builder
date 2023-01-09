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
trait Archive
{

    protected ?string $archive = null;

    /**
     * Указывает путь и имя файла с архивом.
     * @param string $url В качестве значения принимается полный или относительный путь к архивному файлу. 
     * @return self
     */
    public function archive(string $url): self
    {
        $this->archive = $url;
        return $this;
    }

}
