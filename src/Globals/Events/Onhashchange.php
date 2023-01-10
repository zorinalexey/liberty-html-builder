<?php

namespace Liberty\HtmlBuilder\Globals\Events;

trait Onhashchange
{

    /**
     * Атрибут onhashchange срабатывает, когда произошли изменения в части привязки (начинается с символа ' # ')
     * текущего URL-адреса.
     *
     * Пример того, что часть привязки на самом деле: Предположим, что текущий URL-адрес
     * http://www.example.com/Test.htm#part2-якорная часть этого URL будет #part2.
     *
     * Чтобы вызвать это событие, можно:
     * - Измените опорную деталь, установив location.hash или location.href свойство Location Object
     * - Перейдите к текущей странице с другой закладкой (используйте "back" или "forward" кнопки)
     * - Нажмите на ссылку на якорь закладки
     * @param string $script Сценарий, запускаемый на onhashchange
     * @return $this
     */
    public function onhashchange(string $script): self
    {
        $this->attributes['onhashchange'] = $script;
        return $this;
    }
}