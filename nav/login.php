<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="/javascript/script.js"></script>
    <link rel="shortcut icon" href="/img/favicon2.ico" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar">
        <a href="/index.php"><img src="../img/logo.png" alt="" class="logo"></a>
            <ul class="nav-list">
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="nav/onibus.php">ONIBUS CADASTRADOS</a></li>
                <li><a href="/nav/suporte.php">SUPORTE</a></li>
                <li><a href="nav/contact.php">CONTATO</a></li> </ul>
            <a href="/nav/login.php"><img src="../img/account.png" alt="" class="logo1"></a>
        </nav>
    </header>
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Bus<span>Quei</span></div>
    </div>
    <br>
    <div class="login">
        <input type="text" placeholder="usuario" name="user"><br>
        <input type="password" placeholder="Senha" name="password"><br>
        <input type="button" value="Login" onclick="clicar()">
    </div>
    <script>
        function clicar() {
            window.location.href = '../index.html';
            alert('Bem-vindo');
        }
    </script>
    <footer>
        <p class="footer">&copy; 2024 Sistema de Transporte</p>
    </footer>
</body>
</html>
