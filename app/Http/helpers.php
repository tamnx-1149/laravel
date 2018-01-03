<?php
if (!function_exists('getToken')) {
    function getToken($value)
    {
        if ($value) {
            return str_replace('Bearer ', '', $value);
        }
        return null;
    }
}