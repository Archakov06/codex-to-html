<?

return (function($text, $caption, $aligment) {
    return <<<HTML
<blockquote>
    <p>${text}</p>
    <span>${caption}</span>
</blockquote>
HTML;
});