<?php

/**
 * Helper function for a noty flash message
 *
 * @param string|null $message
 * @return
 */
if (!function_exists('noty')) {

    function noty($message = null)
    {
        $noty = app('noty');

        if (!is_null($message)) {
            return $noty->message($message);
        }


        return $noty;
    }
}

