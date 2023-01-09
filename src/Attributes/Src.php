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
trait Src
{

    protected ?string $src = null;

    /**
     * Указывает путь к воспроизводимому файлу.
     * @param string $url В качестве значения принимается полный или относительный путь к файлу. 
     * @return self
     */
    public function src(string $url): self
    {
        $this->src = $url;
        return $this;
    }

}
