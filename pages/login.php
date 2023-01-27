<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login-register.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <title>Login - Atlântida</title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <div class="nav__links">
                <div class="nav__logo">
                    <a href="../index.php"><img src="../images/atlantis-logo.png" alt="Atlantis Logo" id="logo-img"></a>
                </div>
                <a href="./catalog.php">Catálogo</a>
                <a href="#">Sobre nós</a>
            </div>
            <div class="nav__account">
                <a href="../pages/login.php" id="login-btn">Login</a>
                <a href="../pages/register.php" id="register-btn">Registrar</a>
            </div>
        </nav>
    </header>
    <main class="main">
        <form class="main__form" method="POST" action="func.login.php">
            <div class="form__header">
                <h1>Login</h1>
            </div>
            <div class="form__inputs">
                <input type="text" name="username" id="username" class="input-form" required>
                <span class="input-focus" data-placeholder="Nome de usuário"></span>
            </div>
            <div class="form__inputs">
                <input type="password" name="password" id="password" class="input-form" required>
                <span class="input-focus" data-placeholder="Senha"></span>
            </div>
            <div class="form__verify">
                <input type="submit" value="Enviar" id="submit-btn">
                <div class="form__register">
                    <span>Não tem uma conta da Atlântida Books? <a href="../pages/register.php">Registrar</a></span>
                </div>
            </div>
        </form>
    </main>
    <script src="../js/input-focus.js"></script>
    <script src="../js/ocult.js"></script>
    

</body>
</html>