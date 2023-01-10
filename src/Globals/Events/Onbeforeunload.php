<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onbeforeunload
{
    /**
     * Событие onbeforeunload возникает при выгрузке документа.
     * Это событие позволяет отображать сообщение в диалоговом окне подтверждения, чтобы уведомить пользователя о том,
     * хочет ли он остаться или покинуть текущую страницу.
     *
     * Сообщение по умолчанию, которое появляется в поле подтверждения, отличается в разных браузерах.
     * Тем не менее, стандартное сообщение что-то вроде "Are you sure you want to leave this page?".
     * Вы не можете удалить это сообщение.
     *
     * Однако можно написать пользовательское сообщение вместе с сообщением по умолчанию.
     * @param string $script Сценарий, запускаемый на onbeforeunload
     * @return $this
     */
    public function onbeforeunload(string $script): self
    {
        $this->attributes['onbeforeunload'] = $script;
        return $this;
    }
}