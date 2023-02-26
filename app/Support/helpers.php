<?php

use App\Support\Cropper;

if (!function_exists('thumb')) {

    /**
     * Determine if the given value is "blank".
     *
     * @param  mixed  $value
     * @return bool
     */
    function thumb(string $image, int $width, ?int $heigth = null): ?string
    {
        return Cropper::thumb($image, $width, $heigth);
    }
}
