<?php 
    if(isset($_POST["submit"])){
        // print_r($_POST["usuario"]);
        // print_r($_POST["senha"]);~

        include_once("connect.php");
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $result = mysqli_query($connect, "INSERT INTO loginpi49 (usuario, senha) VALUES ('$usuario', '$senha')");

        if($result){
            header("Location: login.php"); 
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css links -->
    <link rel="stylesheet" href="cad.css">
    <title>Cadastrar</title>
</head>
<body>
    <main>
        <div class="desktop">
            <div class="interface">
                <div class="flexbox">
                    <form action="cadastro.php" method="POST" class="flexbox">
                        <h2>Cadastrar</h2>
                        <label for="user"><input type="text" name="usuario" id="usuario" placeholder="Criar nome de usuário"></label>
                        <label for="password"><input type="password" name="senha" id="senha" placeholder="Criar senha"></label>
                        <button type="submit" name="submit" id="submit">Cadastrar</button>
                        <!-- <label for="submit" class="buttonSub"><input type="submit" name="submit" id="submit"></label> -->
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>