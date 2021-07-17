<?php

namespace App\Services;

class Bot extends Form {

    
    protected $pair;
    public function __construct(){
        parent::__construct();
    }
    public function getNamePair(){
        $getForm = $this->form;
       return $this->pair= $getForm['base']['value'].$getForm['reference']['value'];
    }
    
    public function getPricePairs(){
        $getForm = $this->form;
        $this->pair= $getForm['base']['value'].$getForm['reference']['value'];
        $url = 'https://api.binance.com/api/v3/avgPrice?symbol=' . $this->pair;
        $raw = file_get_contents($url);
        $tab = json_decode($raw, true);

        return $tab['price'];

    }

    public function getThresholdUp(){
        $getForm = $this->form;
        $pourcent= $getForm['thresholdUp']['value'];
        return $value = $this->getPricePairs() + ($this->getPricePairs() * $pourcent / 100);
    }

    public function getThresholdDown(){
        $getForm = $this->form;
        $pourcent= $getForm['thresholdDown']['value'];
        return $value = $this->getPricePairs() - ($this->getPricePairs() * $pourcent / 100);
    }

    public function getBet(){
        $getForm = $this->form;
        return $value = $getForm['price']['value'];
    }

    public function getDate(){
        $submit = filter_input(INPUT_POST, 'submit');
        if($submit){
        $value = getdate();
        return $date = $value['year'].'-'.$value['mon'].'-'.$value['mday'].' '.$value['hours'].':'.$value['minutes'].':'.$value['seconds'];
        }
    }

}