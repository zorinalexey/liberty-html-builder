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
trait ContextMenu
{

    protected ?string $contextmenu;

    /**
     * Устанавливает контекстное меню для элемента.
     * @param string $menuId В качестве значения указывается идентификатор меню, созданного с помощью тега <menu>.
     * @return self
     */
    public function contextmenu(string $menuId): self
    {
        $this->contextmenu = $menuId;
        return$this;
    }

}
