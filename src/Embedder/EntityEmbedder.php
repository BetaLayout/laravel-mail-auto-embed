<?php

namespace BetaLayout\LaravelMailAutoEmbed\Embedder;

use BetaLayout\LaravelMailAutoEmbed\Models\EmbeddableEntity;

interface EntityEmbedder
{
    /**
     * @param  EmbeddableEntity $entity
     * @return string
     */
    public function fromEntity(EmbeddableEntity $entity);
}
