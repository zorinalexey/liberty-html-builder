<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Datetime
{
    /**
     * Указывает дату и время
     * @param string|int $datetime
     * @return $this
     */
    public function datetime(string|int $datetime): self
    {
        $format = 'Y-m-d\TH:i:s';
        if (is_int($datetime)) {
            $this->attributes['datetime'] = date($format, $datetime);
        } else {
            $this->attributes['datetime'] = date($format, strtotime($datetime));
        }
        return $this;
    }
}