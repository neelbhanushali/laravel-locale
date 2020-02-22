<?php

if (!function_exists('_v')) {
    function _v($key, $placeholders = [])
    {
        __('validation.' . $key, $placeholders);
    }
}

if (!function_exists('_w')) {
    function _w($key, $placeholders = [])
    {
        __('words.' . $key, $placeholders);
    }
}

if (!function_exists('_m')) {
    function _m($key, $placeholders = [])
    {
        __('messages.' . $key, $placeholders);
    }
}
