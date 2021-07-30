<?php
    if(isset($_POST['calcular'])){
        $fat = $_POST['numero'];
        $resultado = 1;
        
        for ($i= 2; $i <= $fat; $i++) { 
            $resultado *= $i;
        }
        $mensagem = $resultado;
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>8) Crie um formulário web que calcule o fatorial de um número recebido do usuário pelo formulário. Por exemplo:
    Se o número informado for 5, o fatorial será: 5*4*3*2*1 = 120</h1>

        <form name="form" action="exercicio08.php" method="post">
        <div class="mb-3">
                <label for="numero" class="form-label">Numero:</label>
                <input name="numero" type="number" class="form-control" id="numero" aria-describedby="numeroHelp"> 
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