<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/suporte.css">

    <script src="/javascript/script.js"></script>
    <title>BusQuei</title>
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

    <div class="container">
        <h1>Fale Conosco</h1>
        <form action="#" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>


    <footer>
        <p class="footer">&copy; 2024 Sistema de Transporte</p>
    </footer>
 
        
   </body>


</html>