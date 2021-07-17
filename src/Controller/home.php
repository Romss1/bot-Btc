<?php
namespace App\Controller;

use App\Services\ApiLink;
use App\Services\Form;
use App\Services\Bot;
use App\Services\Database;
class Home
{

    public function hom()
    {
        
        
        




        $submit = filter_input(INPUT_POST, 'submit');
        if($submit){
            $test = new Bot();
            $date = $test->getDate();
            $pair = $test->getNamePair();
            $value = $test->getPricePairs();
            $bet = $test->getBet();
            $thresholdDown = $test->getThresholdDown();
            $thresholdUp = $test->getThresholdUp();
            $newinsert = new Database();
            $add = $newinsert->insertOrder($date, $pair, $value, $bet, $thresholdDown, $thresholdUp);
        }

        // while(true){
        //     $lol = $test->getPricePairs();
        //     var_dump($lol);
        //     sleep(10);
        // }

        

        include '../templates/home/home.html.php';
    }

    
}

