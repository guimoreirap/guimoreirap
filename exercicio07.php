<?php
    if (isset($_POST['calcular'])){
        $a = $_POST['valora'];
        $b = $_POST['valorb'];
        $c = $_POST['valorc'];
        
        
        if($a < $b){
            if ($b < $c){
                $mensagem = "{$a}, {$b}, {$c}";
            } else {
                if ($a < $c){
                    $mensagem = "{$a}, {$c}, {$b}";
                } else {
                    $mensagem = "{$c}, {$a}, {$b}";
                }
            }
        } else{
            if ($b < $c){
                if($a < $c){
                    $mensagem = "{$b}, {$a}, {$c}";
                } else {
                    $mensagem = "{$b}, {$c}, {$a}";
                }
            } else {
                $mensagem = "{$c}, {$b}, ${a}";            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h1>7) Crie um formulário web que receba três valores A, B e C. Mostre como resultado os valores de forma ascendente (do menor para o maior).</h1>

        <form name="form" action="exercicio07.php" method="post">
        <div class="mb-3">
                <label for="valora" class="form-label">Valor A:</label>
                <input name="valora" type="number" class="form-control" id="valora" aria-describedby="valoraHelp"> 
        </div>
        <div class="mb-3">
                <label for="valorb" class="form-label">Valor B:</label>
                <input name="valorb" type="number" class="form-control" id="valorb" aria-describedby="valorbHelp"> 
        </div>
        <div class="mb-3">
                <label for="valorc" class="form-label">Valor C:</label>
                <input name="valorc" type="number" class="form-control" id="valorc" aria-describedby="valorcHelp"> 
        </div>
        <button name="calcular" type="submit" class="btn btn-primary">Enviar</button>

        <?php if (isset($mensagem)){ ?>
                <div class="alert alert-primary" role="alert" >
                    <?php echo $mensagem;  ?>
                </div>

        <?php   } ?>

        </form>
    </div>

</body>
</html>