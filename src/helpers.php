<?php

use Spatie\Async\Pool;
use Spatie\Async\Process;
use Spatie\Async\CallableProcess;

if (! function_exists('async')) {
    function async($process): Process
    {
        if (! $process instanceof Process) {
            $process = new CallableProcess($process);
        }

        return $process;
    }
}

if (! function_exists('await')) {
    function await(Pool $pool): void
    {
        $pool->wait();
    }
}