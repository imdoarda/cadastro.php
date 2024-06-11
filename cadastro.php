<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tela de Cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src='telas.js'></script>
</head>

<body>
    <header id="cabecalho">
        <nav id="menu">
            <h1>Menu</h1>
            <ul>
                <li><a href="Index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h3> Tela de cadastro </h3>
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