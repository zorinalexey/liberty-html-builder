<?php

namespace Liberty\HtmlBuilder\Globals;

use Liberty\HtmlBuilder\Globals\Attributes\Accesskey;
use Liberty\HtmlBuilder\Globals\Attributes\Contenteditable;
use Liberty\HtmlBuilder\Globals\Attributes\Contextmenu;
use Liberty\HtmlBuilder\Globals\Attributes\Dir;
use Liberty\HtmlBuilder\Globals\Attributes\Draggable;
use Liberty\HtmlBuilder\Globals\Attributes\Dropzone;
use Liberty\HtmlBuilder\Globals\Attributes\Hidden;
use Liberty\HtmlBuilder\Globals\Attributes\Id;
use Liberty\HtmlBuilder\Globals\Attributes\Inert;
use Liberty\HtmlBuilder\Globals\Attributes\Itemid;
use Liberty\HtmlBuilder\Globals\Attributes\Itemprop;
use Liberty\HtmlBuilder\Globals\Attributes\Itemref;
use Liberty\HtmlBuilder\Globals\Attributes\Itemscope;
use Liberty\HtmlBuilder\Globals\Attributes\Itemtype;
use Liberty\HtmlBuilder\Globals\Attributes\Lang;
use Liberty\HtmlBuilder\Globals\Attributes\SetClass;
use Liberty\HtmlBuilder\Globals\Attributes\Spellcheck;
use Liberty\HtmlBuilder\Globals\Attributes\Style;
use Liberty\HtmlBuilder\Globals\Attributes\Tabindex;
use Liberty\HtmlBuilder\Globals\Attributes\Title;
use Liberty\HtmlBuilder\Globals\Attributes\Translate;
use Liberty\HtmlBuilder\Globals\Attributes\XmlLang;

trait GlobalAttributesAndEvents
{
    use GlobalAttributes, GlobalEvents;

    /**
     * Добавить тегу новый произвольный атрибут
     * @param string $attrName
     * @param $attrValue
     * @return $this
     */
    public function addAttrubute(string $attrName, $attrValue): self
    {
        $this->attributes[$attrName] = $attrValue;
        return $this;
    }
}