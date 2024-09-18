<?php

declare(strict_types=1);

use Harryqt\Dumper\Dumper;

if (! function_exists('hd')) {
    function hd(...$args)
    {
        return Dumper::hd(count($args) === 1 ? $args[0] : $args);
    }
}
