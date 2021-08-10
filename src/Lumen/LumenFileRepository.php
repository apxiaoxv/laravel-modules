<?php

namespace Apxiaoxv\Modules\Lumen;

use Apxiaoxv\Modules\FileRepository;

class LumenFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
