<?php


namespace App\Services;
use \PDO;
use \Throwable;

class Database{

    function getConnexion(): PDO 
    {
        return new PDO (
            'mysql:host=localhost;dbname=bot_btc;charset=UTF8',
            'root',
            '',
        );

    }

    public function insertOrder($date, $pair, $value, $bet, $thresholdDown, $thresholdUp){

        $dbh = $this->getConnexion();
        $dbh->beginTransaction();
        try{
            $sth = $dbh->prepare("INSERT INTO `order` (`Date`,`Pair`,`Value`,`Bet`,`ThresholdDown`,`ThresholdUp`) VALUE (:Date, :Pair, :Value, :Bet, :ThresholdDown, :ThresholdUp)");
            $sth->execute([

                ':Date' => $date,
                ':Pair' => $pair,
                ':Value' => $value,
                ':Bet' => $bet,
                ':ThresholdDown' => $thresholdDown,
                ':ThresholdUp' => $thresholdUp,

            ]);
            $dbh->commit();
        } catch (Throwable $e) {
            $dbh->rollBack();
        }

    }
}