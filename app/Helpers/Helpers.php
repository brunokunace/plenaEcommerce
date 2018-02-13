<?php

namespace App\Helpers;

function copyRecursive($source, $destiny, $mode = 0755)
{
    $info = pathinfo($destiny);
    if (!file_exists($info['dirname'])) {
        mkdir($info['dirname'], $mode, true);
    }
    return copy($source, $destiny);
}