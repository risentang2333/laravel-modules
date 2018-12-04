<?php

namespace Risentang\Modules\Laravel;

use Risentang\Modules\Json;
use Risentang\Modules\Repository as BaseRepository;

class Repository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
