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
trait Formaction
{

    protected ?string $formaction = null;

    /**
     * Определяет адрес обработчика формы — это программа, которая получает данные
     * формы и производит с ними желаемые действия. Атрибут formaction по своему
     * действию аналогично атрибуту action тега <form>. Если одновременно указать
     * action и formaction, то при нажатии на кнопку атрибут action игнорируется
     * и данные пересылаются по адресу, указанному в formaction.
     * @param string $url
     * @return self
     */
    public function formaction(string $url): self
    {
        $this->formaction = $url;
        return $this;
    }

}
