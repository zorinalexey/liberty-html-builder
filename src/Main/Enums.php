<?php

namespace Liberty\HtmlBuilder\Main;

trait Enums
{
    /**
     * @param string $listName
     * @param string $value
     * @return string|null
     */
    protected function enums(string $listName, string $value): null|string
    {
        $listData = require __DIR__ . DIRECTORY_SEPARATOR . 'Lists' . DIRECTORY_SEPARATOR . $listName . '.php';
        $name = strtolower($value);
        foreach ($listData as $key => $item) {
            $n1 = strtolower((string)$key);
            $n2 = strtolower((string)$item);
            if ($n1 === $name || $n2 === $name) {
                return $value;
            }
        }
        return null;
    }
}