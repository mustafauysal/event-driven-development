<?php
namespace Acme;
class Listener
{

    public function eventYakaladim( \Symfony\Component\EventDispatcher\Event $event)
    {
        // $event degiskeniyle bize gelen evente erisebiliriz
        echo "event tetiklendi";
    }

}