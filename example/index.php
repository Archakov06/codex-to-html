<?php
require __DIR__ . '/../codex.php';

$blocks = json_decode(file_get_contents(__DIR__ . '/body.json'), true)['blocks'];

$codex = new CodexToHtml([
    'raw' => function($html) {
        return $html;
    },
    'header' => function($text, $level) {
        return "<h{$level}>{$text}</h{$level}>";
    },
    'paragraph' => function($text) {
        return "<p>{$text}</p>";
    },
    'image' => function($file, $caption, $widthBorder, $stretched, $withBackground) {
        return "<img src=\"{$file['url']}\" title=\"{$caption}\" alt=\"{$caption}\">";
    },
    'quote' => require_once(__DIR__ . '/templates/quote.php'),
    'embed' => require_once(__DIR__ . '/templates/embed.php'),
]);

var_dump($codex->render($blocks));