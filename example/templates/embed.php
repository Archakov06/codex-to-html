<?

return (function($service, $source, $embed, $width, $height, $caption) {
    return <<<HTML
<div class="embed">
    <iframe width="${width}" height="${height}" src="${embed}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
HTML;
});