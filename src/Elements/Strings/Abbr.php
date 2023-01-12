<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Elements\StringElements;
use Liberty\HtmlBuilder\Globals\Attributes\Accesskey;
use Liberty\HtmlBuilder\Globals\Attributes\Contenteditable;
use Liberty\HtmlBuilder\Globals\Attributes\Contextmenu;
use Liberty\HtmlBuilder\Globals\Attributes\Dir;
use Liberty\HtmlBuilder\Globals\Attributes\Draggable;
use Liberty\HtmlBuilder\Globals\Attributes\Dropzone;
use Liberty\HtmlBuilder\Globals\Attributes\Hidden;
use Liberty\HtmlBuilder\Globals\Attributes\Id;
use Liberty\HtmlBuilder\Globals\Attributes\Inert;
use Liberty\HtmlBuilder\Globals\Attributes\Lang;
use Liberty\HtmlBuilder\Globals\Attributes\SetClass;
use Liberty\HtmlBuilder\Globals\Attributes\Spellcheck;
use Liberty\HtmlBuilder\Globals\Attributes\Style;
use Liberty\HtmlBuilder\Globals\Attributes\Tabindex;
use Liberty\HtmlBuilder\Globals\Attributes\Title;
use Liberty\HtmlBuilder\Globals\Attributes\Translate;
use Liberty\HtmlBuilder\Globals\Attributes\XmlLang;
use Liberty\HtmlBuilder\Globals\ClipboardEvents;
use Liberty\HtmlBuilder\Globals\DraggingEvents;
use Liberty\HtmlBuilder\Globals\FormEvents;
use Liberty\HtmlBuilder\Globals\KeyboardEvents;
use Liberty\HtmlBuilder\Globals\MediaEvents;
use Liberty\HtmlBuilder\Globals\MouseEvents;
use Liberty\HtmlBuilder\Globals\OtherEvents;
use Liberty\HtmlBuilder\Globals\WindowEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\AddText;
use Liberty\HtmlBuilder\Main\Children;
use Liberty\HtmlBuilder\Main\GetParent;

class Abbr extends AbstractElement
{
    use Accesskey, SetClass, Contenteditable, Contextmenu, Dir, Draggable, Dropzone,
        Hidden, Id, Inert, Lang, Spellcheck, Style, Tabindex, Title, Translate, XmlLang;
    use ClipboardEvents, DraggingEvents, FormEvents, KeyboardEvents,
        MediaEvents, MouseEvents, OtherEvents, WindowEvents;
    use Children, GetParent, StringElements, AddText;

    public function __construct(?AbstractElement $parent = null)
    {
        parent::__construct($parent);
        $this->tagName = 'abbr';
    }
}