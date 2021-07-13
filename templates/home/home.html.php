<?php
include '../templates/my_head.html.php';
?>

<main>

    <h1>ça marche</h1>
    <p><?= $value ?></p>
    <p><?= $result ?></p>

    <div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choix de la base</option>
            <option value="1">BTC</option>
            <option value="2">ETH</option>
            <option value="3">VET</option>
        </select>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choix de la référence</option>
            <option value="1">USDT</option>
            <option value="2">USDC</option>
            <option value="3">BUSD</option>
        </select>


        <input name='thresholdUp' class="form-control" type='number' id='thresholdUp' placeholder="Seuil Haut en %" value="<?=filter_var($pourcentUp,FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range"=>100]])?>">

        <input name='thresholdDown' class="form-control" type='number' id='thresholdDown' placeholder="Seuil Bas en %" value="<?=filter_var($pourcentDown,FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range"=>100]])?>">

        <input class="form-control" type='number' id='thresholdDown' placeholder="Pour combien en %">

        <button class="btn btn-primary" type="submit" name="submit">Valider</button>

    </div>

</main>