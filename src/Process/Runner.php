<?php

namespace Risentang\Modules\Process;

use Risentang\Modules\Contracts\RunableInterface;
use Risentang\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \Risentang\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \Risentang\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
