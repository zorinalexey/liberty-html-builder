<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onpageshow
{
    /**
     * Событие onpageshow происходит, когда пользователь переходит на веб-страницу.
     * Событие onpageshow аналогично событию onload, за исключением того, что оно происходит после события OnLoad при
     * первой загрузке страницы. Кроме того, событие onpageshow происходит каждый раз при загрузке страницы, в то
     * время как событие onload не возникает при загрузке страницы из кэша.
     * @param string $script Сценарий, который будет выполняться на onpageshow
     * @return $this
     */
    public function onpageshow(string $script): self
    {
        $this->attributes['onpageshow'] = $script;
        return $this;
    }
}