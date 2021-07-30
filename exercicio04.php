<?php
    if (isset($_POST['calcular'])){
        $altura = $_POST['altura'];
        $raio = $_POST['raio'];
        $volume = 3.14159 * ($raio * $raio) * $altura;

        $mensagem = "Seu volume é {$volume}";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>4) Crie um formulário web para receber do usuário o raio e a altura de uma lata de  óleo e calcule o seu volume utilizando a fórmula:
        V = 3.14159 * R2* h</h1>

            <form name="form" action="exercicio04.php" method="post">
            
            <div class="mb-3">
                <label for="altura" class="form-label">Altura:</label>
                <input name="altura" type="number" class="form-control" id="altura" aria-describedby="alturaHelp"> 
            </div>
            <div class="mb-3">
                <label for="raio" class="form-label">Raio:</label>
                <input name="raio" type="number" class="form-control" id="raio" aria-describedby="raioHelp"> 
            </div>
            <button name="calcular" type="submit" class="btn btn-primary">Calcular</button>
            
            <?php if (isset($mensagem)){ ?>
                <div class="alert alert-primary" role="alert" >
                    <?php echo $mensagem;  ?>
                </div>

            <?php   } ?>
            </form>
    </div>
</body>
</html>