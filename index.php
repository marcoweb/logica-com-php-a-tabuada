<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = [];
    for($i = 1;$i <= 10;$i++) {
        $result[$i] = $i * $_POST['numero'];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Tabuada</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="numero">Digite um número inteiro: </label>
            <input type='number' name="numero" />
            <button type="submit">Calcular</button>
        </form>

        <?php if(isset($result)): ?>
        <hr />
        <ul>
            <?php foreach($result as $chave => $valor): ?>
            <li><?= $chave ?> * <?= $_POST['numero'] ?> = <?= $valor ?></li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>
    </body>
</html>