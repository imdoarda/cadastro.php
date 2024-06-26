# ÍNDICE
 
* [Introdução](#introdu%C3%A7%C3%A3o)  
* [Descrição: TELA DE CADASTRO](#descri%C3%A7%C3%A3o-tela-de-cadastro)
* [Descrição: TELA DE LOGIN](#descri%C3%A7%C3%A3o-tela-de-login)
* [Curiosidade](#curiosidade)  
* [Tecnologias Utilizadas](#tecnologias-utilizadas)  
* [Autores](#autores)  


### TELA INICIAL

![image](https://github.com/imdoarda/cadastro.php/assets/127868962/a653cb0e-df90-4793-aafa-739d64a0238a)



## Introdução

 Neste projeto, o intuito foi de aprimorar as habilidades dos alunos construindo uma tela de início, cadastro e login usando propriedades básicas de HTML para, depois, fazer a utilização de banco de dados, com a explicação do professor 

## Descrição: TELA DE CADASTRO

O formulário de cadastro serve para realizar o cadastro de alguém em um site utilizando diversos dados pessoais como: nome, data de nascimento, email, etc.

``CADASTRO.PHP:``

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

   ![image](https://github.com/imdoarda/cadastro.php/assets/127868962/273fd9d2-e1bb-48be-bc75-5eb5c307fbfd)

   
    
## Descrição : TELA DE LOGIN

Nessa tela, usuários já cadastrados realizam seu acesso ao site.

``LOGIN.PHP:``


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

  ![image](https://github.com/imdoarda/cadastro.php/assets/127868962/48b4f064-1ad2-4f6a-b452-c282b1e65c9a)


## Curiosidade:
Em todas as páginas do site existe um cabeçalho. Esse foi feito de acordo com as aulas do primeiro ano, em 2022, quando o professor estava ensinando a montar sites. O código desse cabeçalho está logo abaixo.

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

![cab2](https://github.com/imdoarda/cadastro.php/assets/127868962/4ac26636-a1a6-4c31-99e5-42751aaf4c88)



Esse cabeçalho facilita a locomoção do usuário de uma página a outra. As páginas em questão são:

* ``HOME``
* ``LOGIN``
* ``CADASTRE-SE``

Veja a seguir:


### Tecnologias utilizadas

* ``PHP``
* ``HTML5``
* ``CSS3``
* ``VSCODE``
*  ``GitHub``
*  ``Git``



## Autores

[<img loading="lazy" src="https://avatars.githubusercontent.com/u/127868962?v=4" width=115><br><sub>Maria Eduarda Mendes</sub>](https://github.com/imdoarda)


