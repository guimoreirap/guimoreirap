
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    <div class="container">
    <h1>9) Crie um formulário web que receba um número inteiro e mostre na tela de 1 até o número informado. Por exemplo: <br>
    <h2>Se o número informado for 4, mostre na tela: 1 2 3 4</h2></h1>

        <form name="form" action="exercicio09.php" method="post">
        <div class="mb-3">
                <label for="numero" class="form-label">Numero:</label>
                <input name="numero" type="number" class="form-control" id="numero" aria-describedby="numeroHelp"> 
        </div>
        <button name="calcular" type="submit" class="btn btn-primary">Enviar</button>
            <div class="alert alert-primary" role="alert" >
                <?php
                if (isset($_POST['calcular'])){
                    $numero = $_POST['numero'];
                    for ($i=1; $i < $numero + 1; $i++) { 
                        echo "{$i} ";
                    }
                }
                ?>
            </div>
        </form>
    </div>

</body>
</html>