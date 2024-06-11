<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Página de Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <script src='telas.js'></script>
    <link rel="stylesheet" type="text/css" media="screen" href="cover.css">
    
</head>

<body>
        <nav id="menu">
            <h1>Menu</h1>
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    <div id="login">
        <form method="post" action="" class="form">
            <h1>ENTRAR</h1>
            <p>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email">
            </p>
            <p>
                <label for="subject">Senha:</label>
                <input type="password" id="subject">
            </p>
            <button>Enviar</button>
        </form>
    </div>
    
</body>

</html>