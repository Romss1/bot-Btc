<?php
include '../templates/my_head.html.php';
?>

<main>

    <h1>ça marche</h1>
    <p><?= $value ?></p>
    <p><?= $result ?></p>

    <form method="post" action=''>
        <select name='base' class="form-select" aria-label="Default select example">
            <option selected>Choix de la base</option>
            <option value="1">BTC</option>
            <option value="2">ETH</option>
            <option value="3">VET</option>
        </select>
        <select name='reference' class="form-select" aria-label="Default select example">
            <option selected>Choix de la référence</option>
            <option value="1">USDT</option>
            <option value="2">USDC</option>
            <option value="3">BUSD</option>
        </select>


        <input name='thresholdUp' class="form-control" type='number' id='thresholdUp' placeholder="Seuil Haut en %" value="<?=filter_var($pourcentUp,FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]])?>">

        <input name='thresholdDown' class="form-control" type='number' id='thresholdDown' placeholder="Seuil Bas en %" value="<?=filter_var($pourcentDown,FILTER_VALIDATE_INT, ["options" => ["min_range" => 0]])?>">

        <input name='price' class="form-control" type='number' id='thresholdDown' placeholder="Pour combien en %">

        <button class="btn btn-primary" type="submit" name="submit">Valider</button>

</form>

</main>