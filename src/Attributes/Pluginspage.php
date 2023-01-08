<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Pluginspage
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Pluginspage
{

    protected ?string $pluginspage = null;

    /**
     * Если браузер не поддерживает указанный тип файлов заданный атрибутом src,
     * то pluginspage используется для того, чтобы перейти по указанному адресу,
     * откуда можно скачать и установить необходимый плагин. Браузер сообщает пользователю,
     * что требуемого плагина для отображения файла нет, и запрашивает, загружать его или нет.
     * @param string $url
     * @return self
     */
    public function pluginspage(string $url): self
    {
        $this->pluginspage = $url;
        return$this;
    }

}
