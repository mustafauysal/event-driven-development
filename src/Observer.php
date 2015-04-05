<?php
namespace Acme;

use Symfony\Component\EventDispatcher\EventDispatcher;

class Observer
{
    protected $dispatcher;

    public function __construct()
    {
        $this->dispatcher = new EventDispatcher();
    }


    public function registerEvents()
    {
        $userListener = new Listener();
        $this->dispatcher->addListener( 'event.firlattim', array( $userListener, 'eventYakaladim' ) );


        return $this->dispatcher;
    }


    public function getDispatcher()
    {
        return $this->dispatcher;
    }


}