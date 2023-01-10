<?php

namespace Liberty\HtmlBuilder\Attributes;

trait Code
{
    /**
     * Атрибут / параметр code (от англ. "code" ‒ «код») указывает только название файла апплета, который должен быть
     * запущен браузером при открытии страницы. При этом имя аплета должно иметь расширение «.class» (скомпелированный
     * java файл). Если расширение в названии апплета опущено, то браузер должен самостоятельно дописать расширение
     * «.class».
     * Для указания пути к каталогу с файлом используется атрибут «codebase».
     * @param string $fileName В качестве значения указывается имя файла апплета (с расширением «.class» и без него).
     * @return $this
     */
    public function code(string $fileName): self
    {
        $this->attributes['code'] = $fileName;
        return $this;
    }
}