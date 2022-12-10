<?php

if (! function_exists('assetPath')) {
    function assetPath($file)
    {
        return asset('themes/admin/dist/'. $file);
    }
}

