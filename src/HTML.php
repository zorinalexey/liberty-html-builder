<?php

namespace Liberty\HtmlBuilder;

use Liberty\HtmlBuilder\Blocks\Body;
use Liberty\HtmlBuilder\Blocks\Head;
use Liberty\HtmlBuilder\Globals\GlobalAttributesAndEvents;
use Liberty\HtmlBuilder\Main\AbstractElement;
use Liberty\HtmlBuilder\Main\Children;

class HTML extends AbstractElement
{
    use GlobalAttributesAndEvents, Children;

    public function __toString(): string
    {
        $str = '<!DOCTYPE>';
        $tagName = 'html';
        $str .= '<' . $tagName;
        $str .= $this->getAttrString();
        $str .= '>';
        $head = $this->getTag('head');
        if ($head) {
            $str .= $head;
        }
        $body = $this->getTag('body');
        if ($body) {
            $str .= $body;
        }
        $str .= '</' . $tagName . '>';
        return $str;
    }

    /**
     * @return Head
     */
    public function head(): Head
    {
        if (!isset($this->content['head'])) {
            $obj = new Head($this);
            $this->content['head'] = $obj;
        }
        $this->children['head'][1] = $this->content['head'];
        return $this->content['head'];
    }

    /**
     * @return Body
     */
    public function body(): Body
    {
        if (!isset($this->content['body'])) {
            $obj = new Body($this);
            $this->content['body'] = $obj;
        }
        $this->children['body'][1] = $this->content['body'];
        return $this->content['body'];
    }

    public function childs(string|null $tagName = null): false|array|AbstractElement
    {
        return $this->children[$tagName][1] ?? false;
    }


}