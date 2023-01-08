<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

use \Liberty\HtmlBuilder\Attributes\Enums;

/**
 * Трейт Align
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Align
{

    use Enums;

    protected ?string $align = null;

    /**
     * Задает выравнивание апплета относительно близлежащих элементов и текста.
     * @param string $align
     * bottom - Выравнивание нижней границы апплета по окружающему тексту.
     * left - Выравнивает апплет по левому краю.
     * middle - Выравнивание середины апплета по базовой линии текущей строки.
     * right - Выравнивает апплет по правому краю.
     * top - Верхняя граница апплета выравнивается по самому высокому элементу текущей строки.
     * @return self
     */
    public function align(string $align): self
    {
        $this->align = $this->setEnums('Align', $align);
        return $this;
    }

}
