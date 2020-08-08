# Codex To HTML

Class for converting JSON-blocks EditorJS to HTML.

## How to use?

Create an instance of the class with prepared settings for each block and call the `render` method  (put JSON-blocks).

## Example

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
