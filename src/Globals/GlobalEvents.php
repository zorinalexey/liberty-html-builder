<?php

namespace Liberty\HtmlBuilder\Globals;

trait GlobalEvents
{
    // Events
    use ClipboardEvents, DraggingEvents, FormEvents, KeyboardEvents,
        MediaEvents, MouseEvents, OtherEvents, WindowEvents;
}