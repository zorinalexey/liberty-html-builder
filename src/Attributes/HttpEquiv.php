<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт HttpEquiv
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait HttpEquiv
{

    use Enums;

    /**
     * Браузеры преобразовывают значение атрибута http-equiv, заданное с помощью
     * content, в формат заголовка ответа HTTP и обрабатывают их, как будто они
     * прибыли непосредственно от сервера.
     * @param string $equiv content-type - Тип кодировки документа.
     * expires - Устанавливает дату и время, после которой информация в документе будет считаться устаревшей.
     * pragma - Способ кэширования документа.
     * refresh - Загрузить другой документ в текущее окно браузера.
     * @return self
     */
    public function httpEquiv(string $equiv): self
    {
        $this->{'http-equiv'} = $this->setEnums('HttpEquiv', $equiv);
        return $this;
    }

}
