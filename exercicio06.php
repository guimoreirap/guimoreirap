<?php
    if (isset($_POST['calcular'])){
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $media = ($nota1 + $nota2 + $nota3) / 3;

        switch ($media){
            case ($media < 10 && $media >= 9):
                $mensagem = "{$nome} sua média é {$media} e a classificação A";
            break;
            case ($media < 8.9 && $media >= 8):
                $mensagem = "{$nome} sua média é {$media} e a classificação B";
            break;
            case ($media < 7.9 && $media >= 7):
                $mensagem = "{$nome} sua média é {$media} e a classificação C";
            break;
            case ($media < 6.9 && $media >= 6):
                $mensagem = "{$nome} sua média é {$media} e a classificação D";
            break;
            case ($media < 5.9 && $media >= 0):
                $mensagem = "{$nome} sua média é {$media} e a classificação I";
            break;
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h1>6) Crie um formulário web que receba o nome de um estudante e três notas. Calcule a média aritmética e a classificação do estudante. A classificação é dada conforme a tabela abaixo:
    </h1>
        <h2>
            Média Classificação
            <br>
            9-10 = A<br>
            8-8,9 = B<br>
            7-7,9 = C<br>
            6-6,9 = D<br>
            0-5,9 = I<br></h2>
        <form name="form" action="exercicio06.php" method="post">
        <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nomeHelp"> 
        </div>
        <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1:</label>
                <input name="nota1" type="number" class="form-control" id="nota1" aria-describedby="nota1Help"> 
        </div>
        <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2:</label>
                <input name="nota2" type="number" class="form-control" id="nota2" aria-describedby="nota2Help"> 
        </div>
        <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3:</label>
                <input name="nota3" type="number" class="form-control" id="nota3" aria-describedby="nota3Help"> 
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