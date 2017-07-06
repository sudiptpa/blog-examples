<?php

if (!function_exists('canonical_url')) {
    /**
     * Generate a non-www url for the application.
     *
     * @param  string  $url
     * @return string
     */
    function canonical_url($url)
    {
        if (starts_with($url, 'www.')) {
            return str_replace('www.', '', $url);
        }

        return $url;
    }
}
