<?php

/**
 *Helper function for a noty flash message
 *
 * @param string|null $message
 * @return
 */
if (!function_exists('flash')) {
    function flash($message = null)
    {
        $noty = app('flash');

        if (!is_null($message)){
            return $noty->message($message);
        }

        return $noty;
    }
}

