<?php

use Pinweb\Readit\Facades\Readit;

function readit(...$args)
{
    return Readit::create(...$args);
}
