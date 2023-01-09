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
trait Action
{

    protected ?string $action = null;

    /**
     * Адрес программы или документа, который обрабатывает данные формы. 
     * @param string $url
     * @return self
     */
    public function action(string $url): self
    {
        $this->action = $url;
        return $this;
    }

}
