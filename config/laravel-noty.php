<?php

return [
    /*
     * Positions:  top, topLeft, topCenter, topRight, center, centerLeft, centerRight, bottom, bottomLeft, bottomCenter, bottomRight
     */
    'position' => 'topRight',

    /*
     * Themes:  relax, mint, sunset, metroui, semanticui, bootstrap-v3, bootstrap-v4
     */
    'theme' => 'mint',

    /*
     * Type of a message:  alert, success, error, warning, information, notification.
     */
    'type' => 'alert',

    /*
     * [boolean] If you want to use queue feature set this true.
     */
    'queue' => 'global',

    /*
     * [boolean] - Adds notification to the beginning of queue when set to true.
     */
    'force' => 'false',

    /*
     * [integer] - You can set max visible notification count for dismissQueue true option.
     */
    'maxVisible' => 5,

    /*
     * [integer|boolean] - Delay for closing event in milliseconds. Set false for sticky notifications.
     */
    'timeout' => 3000,

    /*
     * [boolean] - Displays a progress bar.
     */
    'progressBar' => 'false',

    /*
     * Animation options - default is used Animated.css class name.
     */
    'animation' => [
        'open' => 'bounceInRight',
        'close' => 'bounceOutRight',
    ],

    /*
     * Close a flash message
     */
    'closeWith' => ['click'], // ['click', 'button']

    /*
     * [boolean] - If true closes all notifications and shows itself.
     */
    'killer' => 'false',

    /*
     * [boolean|array] - An array of buttons, for creating confirmation dialogs.
     *
     * Example:
     *  Noty.button('Yes', 'btn btn-success', function () {
     *                     console.log('button 1 clicked');
     *  }, {id: 'button1', 'data-status': 'ok'}),
     *   Noty.button('No', 'btn btn-error', function () {
     *     noty.close();
     *   })
     */
    'buttons' => 'false',

    /*
     * Custom container selector string. Like '.my-custom-container'. Layout parameter will be ignored.
     */
    'container' => 'false'

];

