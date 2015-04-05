<?php
namespace Acme;
use Symfony\Component\EventDispatcher\Event;

class Olay extends Event{

    public $olaylarOlaylar;

    public function setOlay( $param )
    {
        $this->olaylarOlaylar = $param;

        return $this;
    }

}