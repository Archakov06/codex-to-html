# Codex To HTML

Класс для преобразования блочных компонентов от Codex Editor в HTML.

## Как использовать?

Подключить PHP файл `codex.php` к своему скрипту. Создать экземпляр класса c заготовленными настройками на каждый блок и вызывать метод `render($blocks)`.

## Пример

```php
<?php
require './codex.php';

$codex = new CodexToHtml([
    'raw' => function($html) {
        return $html;
    },
    'header' => function($text, $level) {
        return "<h${level}>${text}</h${level}>";
    },
    'paragraph' => function($text) {
        return "<p>{$text}</p>";
    },
    'image' => function($file, $caption, $widthBorder, $stretched, $withBackground) {
        return "<img src=\"{$file['url']}\" title=\"{$caption}\" alt=\"{$caption}\">";
    },
]);

// $blocks - JSON состоящий из блоков-компонентов Codex Editor

$codex->render($blocks);

```

## License

MIT © [Archakov Dennis](https://github.com/Archakov06)
