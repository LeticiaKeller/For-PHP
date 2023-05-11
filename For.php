<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="For.css">
    <title>Estrutura For</title>
</head>
<body>
    <?php
        $num= $_GET["primo"];
        $cont= 0;
        $div= 0;
        echo "<h1>Valores múltiplos: </h1>";
        for ($cont = 1; $cont <= 10 ; $cont++){
            if($num % $cont == 0){
                $valmult = "<h2> $cont </h2>";
                echo $valmult;
                $div ++;
            }
            
        }

        if ($div == 2){
            echo "<h2><br/>Ele é divisivel por $div números</h2>";
            echo "<h3><br/>Resultado: $num é um número primo!</h3>";
        }
        else {
            if ($div > 2){
            echo "<h2><br/>Ele é divisivel por $div números</h2>";
            echo "<h3><br/>Resultado: $num não é um número primo!</h3>";
        }
    }
    ?>
    
    <br/><a href="For.html"><button>Voltar</button></a>
</body>
</html>