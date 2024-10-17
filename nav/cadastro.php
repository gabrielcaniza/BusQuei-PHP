
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <header id="Home">
        <nav class="navbar">

            <a href="/index.php"><img src="../img/logo.png" alt="" class="logo"></a>

            <ul class="nav-list">
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="onibus.php">ONIBUS CADASTRADOS</a></li>
                <li><a href="suporte.php">SUPORTE</a></li>
                <li><a href="contact.php">CONTATO</a></li> </ul>
            <a href="/nav/login.php"><img src="../img/account.png" alt="" class="logo1"></a>
        </nav>

    </header>
    <div class="container">
        <h1>Cadastro de Ônibus</h1>
        <form id="bus-form" action="../db/processaonibus.php" method="POST">
            <label for="bus-number">Número do Ônibus:</label>
            <input type="text" id="bus-number" name="bus-number" required>

            <label for="bus-route">Rota:</label>
            <input type="text" id="bus-route" name="bus-route" required>

            <label for="bus-capacity">Capacidade:</label>
            <input type="number" id="bus-capacity" name="bus-capacity" required>

            <label for="bus-driver">Nome do Motorista:</label>
            <input type="text" id="bus-driver" name="bus-driver" required>

            <button type="submit">Cadastrar Ônibus</button>
        </form>
    </div>
    <script src="/javascript/scriptCadastro.js"></script>
    <footer>
        <p class="footer">&copy; 2024 Sistema de Transporte</p>
    </footer>
    
    </body>

</html>