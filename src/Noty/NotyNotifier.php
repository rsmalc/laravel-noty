<?php

namespace RSmalc\Noty;

class NotyNotifier
{

    private $session;

    /**
     * A new instance.
     *
     * @param SessionStore $session
     */
    function __construct(NotySessionStore $session)
    {
        $this->session = $session;
    }


    /**
     * Flash a message.
     *
     * @param  string $message
     * @param  string $level
     * @return $this
     */
    public function message($message)
    {
        $this->session->flash('noty.message', $message);

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
        $this->session->flash('noty', $config);

        return $this;
    }
}