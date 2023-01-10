<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onunload
{
    /**
     * Атрибут onunload срабатывает после того, как страница выгружена (или окно обозревателя было закрыто).
     * Событие onunload происходит, когда пользователь переходит от страницы
     * (щелкнув по ссылке, отправив форму, закрыв окно браузера и т.д.)
     *
     * При повторной загрузке страницы также инициируется событие onunload (и событие onload).
     * @param string $script Сценарий, запускаемый при выгрузке
     * @return $this
     */
    public function onunload(string $script): self
    {
        $this->attributes['onunload'] = $script;
        return $this;
    }
}