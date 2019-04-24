<?php

return [
    /*
    * Type of a message:  alert, success, error, warning, info.
    */
    'type' => 'alert',

    /*
     * Positions:  top, topLeft, topCenter, topRight, center, centerLeft, centerRight, bottom, bottomLeft, bottomCenter, bottomRight
     */
    'layout' => 'topRight',

    /*
     * Themes:  relax, mint, sunset, metroui, semanticui, nest, light, bootstrap-v3, bootstrap-v4
     */
    'theme' => 'mint',

    /*
    * [integer|boolean] - Delay for closing event in milliseconds. Set false for sticky notifications.
    */
    'timeout' => 4000,

    /*
     * [boolean] - Displays a progress bar.
     */
    'progressBar' => 'true',

    /*
     * Close a flash message
     */
    'closeWith' => ['click'], // ['click', 'button']

    /*
     * You can use this id with querySelectors. Generated automatically if false.
     */
    'id' => 'false',

    /*
     * Default noty animation, you can use Animated.css or anything else
     */
    'animation' => [
      'open' => 'noty_effects_open',
      'close' => 'noty_effects_close',
    ],

    /*
     * modal: boolean
     */
    'modal' => 'false',

    /*
     * [boolean] If you want to use queue feature set this true.
     */
    'queue' => 'global',

    /*
     * [boolean] - Adds notification to the beginning of queue when set to true.
     */
    'force' => 'false',

    /*
     * killer: boolean,string
     * If true closes all visible notifications and shows itself. If string(queueName) closes all visible notification on this queue and shows itself.
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

