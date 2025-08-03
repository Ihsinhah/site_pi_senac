<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>

    <!-- link bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- end bootstrap icons -->

    <link rel="stylesheet" href="login.css">

</head>
<body>
    <main>
        <div class="desktop">
            <div class="interface">
                <div class="flexbox">
                    <form action="testLogin.php" method="POST" class="flexbox">
                        <h2>Login</h2>
                        <label for="user"><input type="text" name="usuario" id="usuario" placeholder="Nome de usuário ou email"></label>
                        <label for="password"><input type="password" name="senha" id="senha" placeholder="Senha"></label>
                        <button type="submit" name="submit" id="submit">Entrar</button>
                        <a href="cadastro.php">Não tenho Login</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>