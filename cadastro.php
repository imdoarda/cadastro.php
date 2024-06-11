<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tela de Cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='telas.js'></script>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>

<body>
    <header>
        <nav id="menu">
            <h1>Menu</h1>
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <div id="login">
        <form method="post" action="" class="form">
            <h1> CADASTRO </h1>
            <form>
                <input type="email" id="loginEmail" placeholder="Digite seu email" />
                <br>
                <input type="password" id="loginSenha" placeholder="Digite sua senha" />
                <br>
                <input type="password" id="loginConfirm" placeholder="Confirme sua senha" />
                <br>
                <input type="name" id="loginName" placeholder="Digite seu nome" />
                <br>
                <input type="phone" id="loginTelefone" placeholder="Digite seu telefone" />
                <br>
                <input type="date" id="loginData" placeholder="Digite sua data de nascimento" />
                <br>
                <input type="ID" id="loginCPF" placeholder="Digite seu CPF" />
                <br>
                <br>
                <button type="button" onclick="Verifica()">AVANÇAR</button>
            </form>

    </div>


</body>

</html>