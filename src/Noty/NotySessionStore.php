<?php
namespace RSmalc\Noty;

use Illuminate\Session\Store;

class NotySessionStore
{
    private $session;

    /**
     * Create new instance
     *
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message to the session instance
     *
     * @param string $name
     * @return array $data
     */
    public function flash($name, $data = [])
    {
        $this->session->flash($name, $data);
    }
}