<?php
    if (isset($_POST['calcular'])){
        $valorkm = $_POST['valor'];

        $valorm = ($valorkm) * 1000;

        $mensagem = "A conversão de {$valorkm} km para metros é de {$valorm} m";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
    <h1>3) Crie um formulário web que receba a distância em kilometros e retorne ela convertida para metros</h1>
        <form name="form" action="exercicio03.php" method="post">
        <div class="mb-3">
                <label for="valor" class="form-label">Valor em km:</label>
                <input name="valor" type="number" class="form-control" id="valor" aria-describedby="valorHelp"> 
        </div>
            <div class="mb-3">
            <button name="calcular" type="submit" class="btn btn-primary">Converter</button>

                <?php  if (isset($mensagem)){   ?>
                    <div class="alert alert-primary" role="alert">
                        <?php  echo $mensagem; ?>
                    </div>
                <?php  } ?>
        </form>
    </div>
</body>
</html>