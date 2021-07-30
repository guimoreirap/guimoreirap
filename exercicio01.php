<?php
    if ( isset($_POST['calcular'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        $soma = $numero1 + $numero2;

        $mensagem = "A soma é {$soma}.";
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">

        <h1>1) Crie um formulário web que receba 2 valores e mostre a soma desses valores.
        </h1>
        <form name="form" action="exercicio01.php" method="post">
            
            <div class="mb-3">
                <label for="numero1" class="form-label">Número 1:</label>
                <input name="numero1" type="number" class="form-control" id="numero1" aria-describedby="numero1Help">
            </div>
            <div class="mb-3">
                <label for="numero2" class="form-label">Número 2</label>
                <input name="numero2" type="number" class="form-control" id="numero2" aria-describedby="numero2Help">
            </div>
            <button name="calcular" type="submit" class="btn btn-primary">Calcular</button>
        </form>
        <?php if (isset($mensagem)) {  ?>
            <div class="alert alert-primary" role="alert"> 
                <?php echo $mensagem; ?>
            </div>
        <?php   } ?>
    
    </div>
    
</body>
</html>