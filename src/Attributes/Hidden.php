<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Hidden
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Hidden
{

    protected ?string $hidden = null;

    /**
     * Скрывает содержимое элемента от просмотра.
     * @param bool $hidden true - скрыть элемент. false - не скрывать элемент
     * @return self
     */
    public function hidden(bool $hidden): self
    {
        if ($hidden) {
            $this->hidden = 'hidden';
        }
        return $this;
    }

}
