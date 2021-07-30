<?php
    if (isset($_POST['calcular'])){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        $media = ($nota1 + $nota2) / 2;

        if($media >= 7){
            $mensagem = "Sua média é {$media}. Aprovado!";
        } else {
            $mensagem = "Sua média é {$media}. Reprovado.";
        }
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h1>5) Crie um formulário web que receba 2 notas, calcule a média dentre as notas e mostre se o aluno está aprovado ou reprovado. Considere a aprovação a nota maior ou igual a 7.</h1>

        <form name="form" method="post"action="exercicio05.php">
        <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1:</label>
                <input name="nota1" type="number" class="form-control" id="nota1" aria-describedby="nota1Help"> 
        </div>
        <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2:</label>
                <input name="nota2" type="number" class="form-control" id="nota2" aria-describedby="nota2Help"> 
        </div>
        <button name="calcular" type="submit" class="btn btn-primary">Calcular</button>
        
        <?php if (isset($mensagem)){   ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $mensagem;  ?>
            </div>
        <?php } ?>
        </form>
    </div>
    
</body>
</html>