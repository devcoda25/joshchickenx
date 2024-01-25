<?php

if (! function_exists('active_class')) {
    /**
     * Determine if the class should be added to the element.
     *
     * @param  string|array  $routes
     * @param  string  $outputClass
     * @return string
     */
    function active_class($routes, $outputClass = 'active')
    {
        $currentRouteName = Route::currentRouteName();

        if (is_array($routes)) {
            return in_array($currentRouteName, $routes) ? $outputClass : '';
        }

        return $currentRouteName == $routes ? $outputClass : '';
    }
}

