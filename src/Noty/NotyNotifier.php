<?php

namespace RSmalc\Noty;

use Illuminate\Support\Arr;

class NotyNotifier
{

    private $session;
    private $config;

    /**
     * A new instance.
     *
     * @param SessionStore $session
     */
    function __construct(NotySessionStore $session)
    {
        $this->session = $session;
        $this->config = config('laravel-noty');
    }


    /**
     * Flash a message.
     *
     * @param  string $message
     * @param  string $type
     * @return $this
     */
    public function message($message, $type = 'alert')
    {
        $messages = [];

        if(!empty($message)) {

            // It loooked if exist any old messages
            if (!empty(session('noty.messages'))) {
                $messages = session('noty.messages');
            }

            // Add last new message if it's not in array
            if(!collect(Arr::flatten($messages))->contains($message)){
                $messages[] = [
                  'text' => $message,
                  'type' => $type,
                ];
            }
        }

        $this->session->flash('noty.messages', $messages);
        $this->session->flash('noty.config', $this->config);

        if(in_array($type, ['success', 'error', 'warning', 'information', 'notification'])) {
            $this->session->flash('noty.config.type', $type);
        }

        return $this;
    }

    /**
     * Config  flash message display.
     *
     * @param array $config
     * @return $this
     */
    public function config($config = [])
    {
        $this->session->flash('noty.config', $config);

        return $this;
    }
}
