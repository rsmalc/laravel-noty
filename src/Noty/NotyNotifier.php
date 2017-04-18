<?php

namespace RSmalc\Noty;

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
        $this->session->flash('noty.message', $message);
        $this->session->flash('noty.config', $this->config);

        if(in_array($type, ['success', 'error', 'warning', 'information', 'notification']))
            $this->session->flash('noty.config.type', $type);

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