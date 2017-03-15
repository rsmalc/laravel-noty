<?php

return [
    /*
     * Positions: top, topRight, topLeft, topCenter, center, centerLeft, centerRight, bottom, bottomLeft, bottomRight, bottomCenter or inline (custom containter).
     */
    'layout' => 'topRight',

    /*
     * Themes:  defaultTheme, bootstrapTheme, relax, metroui.
     */
    'theme' => 'bootstrapTheme',

    /*
     * Type of a message:  alert, success, error, warning, information, notification.
     */
    'type' => 'alert',

    /*
     * [boolean] If you want to use queue feature set this true.
     */
    'dismissQueue' => true,

    /*
     * [boolean] - Adds notification to the beginning of queue when set to true.
     */
    'force' => false,

    /*
     * [integer] - You can set max visible notification count for dismissQueue true option.
     */
    'maxVisible' => 5,

    /*
     * Template for display.
     */
    'template' => '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',

    /*
     * [integer|boolean] - Delay for closing event in milliseconds. Set false for sticky notifications.
     */
    'timeout' => 3000,

    /*
     * [boolean] - Displays a progress bar.
     */
    'progressBar' => false,

    /*
     * Animation options - default is used Animated.css class name.
     */
    'animation' => [
        'open' => 'bounceInDown',
        'close' => 'flipOutY',
        'easing' => 'swing',
        'speed' => 500 // opening & closing animation speed
    ],

    /*
     * Close a flash message
     */
    'closeWith' => 'click', // ['click', 'button', 'hover', 'backdrop'] // backdrop click will close all notifications

    /*
     * [boolean] - If true adds an overlay
     */
    'modal' => false,

    /*
     * [boolean] - If true closes all notifications and shows itself.
     */
    'killer' => false,

    /*
     * [boolean|array] - An array of buttons, for creating confirmation dialogs.
     */
    'buttons' => false
];

