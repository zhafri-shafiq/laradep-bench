<?php

namespace Laradep\Tasks;

use Laradep\HasStub;
use Laradep\Tasks\Task;
use Laradep\Tasks\TaskContract;
use Symfony\Component\Process\Process;

class SetupLaravelQueueTask extends Task implements TaskContract
{
    use HasStub;

    public function run()
    {
        
    }
}
