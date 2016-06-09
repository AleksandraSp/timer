<?php

namespace Timer\Model;

class Timer {

    public $id;
    public $name;
    public $owner;

    /**
     * In order to use Zend db's TableGateway, override this.
     */
    public function exchangeArray($data){
        if(empty($data['name']) || empty($data['owner'])){
            throw new Exception("Timer model is not provided with mandatory data.");
        }
        $this->name = $data['name'];
        $this->owner = $data['owner'];
    }
}
