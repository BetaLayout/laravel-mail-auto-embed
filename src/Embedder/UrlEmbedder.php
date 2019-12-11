<?php

namespace BetaLayout\LaravelMailAutoEmbed\Embedder;

interface UrlEmbedder
{
    /**
     * @param  string  $url
     * @return string
     */
    public function fromUrl($url);
}
