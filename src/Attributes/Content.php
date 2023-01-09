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
trait Content
{

    protected ?string $content = null;

    /**
     * content устанавливает значение атрибута, заданного с помощью name или http-equiv.
     * Атрибут content может содержать более одного значения, в этом случае они разделяются запятыми или точкой с запятой.
     * @param string $content Строка символов
     * @return self
     */
    public function content(string $content): self
    {
        if ( ! $this->content) {
            $this->content = $content;
        } else {
            $this->content .= ';' . $content;
        }
        return $this;
    }

}
