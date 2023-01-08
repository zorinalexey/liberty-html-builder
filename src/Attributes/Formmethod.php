<?php

declare(strict_types = 1);

namespace Liberty\HtmlBuilder\Attributes;

/**
 * Трейт Autofocus
 * @version 0.0.1
 * @package Liberty\HtmlBuilder\Attributes
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
trait Formmethod
{

    protected ?string $formmethod = null;

    /**
     * Атрибут сообщает браузеру, каким методом следует передавать данные формы на сервер.
     * @param string $method Различают два метода — GET и POST.
     * GET- Этот метод предназначен для передачи данных формы непосредственно в
     * адресной строке в виде пар «имя=значение», которые добавляются к адресу
     * страницы после вопросительного знака и разделяются между собой амперсандом
     * (символ &). Полный адрес к примеру будет http://site.ru/doc/?name=Vasya&password=pup.
     * Объём данных в методе ограничен 4 Кб.
     * POST - Посылает на сервер данные в запросе браузера,
     * объём пересылаемых данных ограничен лишь настройками сервера.
     * @return self
     */
    public function formmethod(string $method): self
    {
        if (strtolower($method) !== 'get') {
            $method = 'POST';
        } else {
            $method = 'GET';
        }
        $this->formmethod = $method;
        return $this;
    }

}
