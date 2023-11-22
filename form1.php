<?php
if(isset($_POST["submit"]))
{
    include_once("config.php");
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $historico = $_POST["historicotrans"];

    $response = mysqli_query($conexao, "INSERT INTO cliente(nome,endereco,telefone,email,transacoes) VALUES('$nome','$endereco','$telefone','$email','$historico')");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cliente</title>
    <link rel="stylesheet" href="stlyeform1.css">
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
            <form action="form1.php" method="post">
                <h1>Cliente</h1>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Insira Nome"><br><br>
    
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" placeholder="Insira Endereço"><br><br>
    
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" placeholder="Insira Telefone"><br><br>
    
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="Insira E-mail"><br><br>
    
                <label for="historicotrans">Histórico de Transações:</label>
                <input type="text" name="historicotrans" id="historicotrans"><br><br>
    
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </main>
</body>
</html>