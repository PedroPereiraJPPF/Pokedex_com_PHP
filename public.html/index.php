<?php
$url = "https://www.canalti.com.br/api/pokemons.json";
$poke = json_decode(file_get_contents($url));
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    foreach ($poke->pokemon as $Pokemon) {
        echo "<div class='espaço'>";
        echo "<img src=$Pokemon->img>";
        echo "<p>$Pokemon->name</p>";
        if (isset($Pokemon->type)) {
            echo "<p><b>Tipo:</b></p>";
            foreach ($Pokemon->type as $tipo) {
                echo "<p class = 'tipo'>$tipo</p>";
            }
        }
        if (isset($Pokemon->next_evolution)) {
            echo "<p><b>Evoluções:</b></p>";
            foreach ($Pokemon->next_evolution as $evoluções) {
                echo "<p>$evoluções->name</p>";
            }
        } else {
            echo "<p>Não tem mais evoluções</p>";
        }
        echo "</div>";
    }
    ?>
</body>

</html>