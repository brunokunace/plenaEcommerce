<?php

function copyRecursive($source, $destiny, $mode = 0755)
{
    $info = pathinfo($destiny);
    if (!file_exists($info['dirname'])) {
        mkdir($info['dirname'], $mode, true);
    }
    return copy($source, $destiny);
}

if (!function_exists('formatPrice')) {

    /**
     * Format integer to a price
     * @param integer $price
     * @return string
     */
    function formatPrice($price)
    {
        return 'R$' . number_format($price, 2, ',', '.');
    }
}