<?php

namespace Liberty\HtmlBuilder\Elements\Strings;

use Liberty\HtmlBuilder\Globals\Attributes\Dir;
use Liberty\HtmlBuilder\Globals\Attributes\Lang;
use Liberty\HtmlBuilder\Globals\Attributes\SetClass;
use Liberty\HtmlBuilder\Globals\Attributes\Style;
use Liberty\HtmlBuilder\Globals\Attributes\Title;
use Liberty\HtmlBuilder\Globals\Attributes\XmlLang;
use Liberty\HtmlBuilder\Globals\ClipboardEvents;
use Liberty\HtmlBuilder\Globals\DraggingEvents;
use Liberty\HtmlBuilder\Globals\FormEvents;
use Liberty\HtmlBuilder\Globals\KeyboardEvents;
use Liberty\HtmlBuilder\Globals\MediaEvents;
use Liberty\HtmlBuilder\Globals\MouseEvents;
use Liberty\HtmlBuilder\Globals\OtherEvents;
use Liberty\HtmlBuilder\Globals\WindowEvents;

class Acronym extends \Liberty\HtmlBuilder\Main\AbstractElement
{

    use SetClass,Dir,Id,Lang,Style,Title,XmlLang;

    use ClipboardEvents, DraggingEvents, FormEvents, KeyboardEvents,
        MediaEvents, MouseEvents, OtherEvents, WindowEvents;
    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        return $this->stringify('acronym');
    }
}