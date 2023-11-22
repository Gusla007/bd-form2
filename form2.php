<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");
    $conta = $_POST["conta"];
    $saldo = $_POST["saldo"];
    $clientetitu = $_POST["clientetitu"];
 

    $response = mysqli_query($conexao, "INSERT INTO conta(conta,saldo,cliente_titular) VALUES('$conta','$saldo','$clientetitu')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Conta</title>
    <link rel="stylesheet" href="styleform2.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="form1.php">Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form2.php">Conta</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<br><br>
      <main>
        <div class="form">
            <form action="form2.php" method="post">
                <h1>Conta</h1>
                <label for="conta">Conta:</label>
                <input type="text" name="conta" id="conta" placeholder="Insira o tipo da conta"><br><br>
    
                <label for="saldo">Saldo:</label>
                <input type="text" name="saldo" id="saldo" placeholder="Insira Saldo"><br><br>
    
                <label for="clientetitu">Cliente Titular:</label>
                <input type="text" name="clientetitu" id="clientetitu" placeholder="Insira Cliente Titular"><br><br>
    
    
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </main>
</body>
</html>