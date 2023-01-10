<?php

namespace Liberty\HtmlBuilder\Attributes;

/**
 *
 */
trait Coords
{

    /**
     * Задает координаты ссылки
     * @return $this
     * @var ... Целые цисла координат перечисленные через запятую. Все координаты чередуются как {x}, {y}
     * Можно задавать неограниченное количество координат для любой произвольной фигуры {shape="poly"}
     */
    public function coords(): self
    {
        $coords = func_get_args();
        foreach ($coords as $coord) {
            $bt = (bool)$coord;
            if ($bt or $coord === 0) {
                $this->coords[] = $coord;
            }
        }
        return $this;
    }
}