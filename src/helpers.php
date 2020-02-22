<?php

if (!function_exists('_v')) {
    function _v($key, $placeholders = [])
    {
        return __('validation.' . $key, $placeholders);
    }
}

if (!function_exists('_w')) {
    function _w($key, $placeholders = [])
    {
        return __('words.' . $key, $placeholders);
    }
}

if (!function_exists('_m')) {
    function _m($key, $placeholders = [])
    {
        return __('messages.' . $key, $placeholders);
    }
}
