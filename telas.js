//Bloco de verificação de preenchimento de campos

function Verifica(){
    let user = document.getElementById('loginEmail').value;
    let user1 = document.getElementById('email').value;
    let senha = document.getElementById('loginSenha').value;
    let senha1 = document.getElementById('subject').value;
    let confirmacao = document.getElementById('loginConfirm').value;
    let name = document.getElementById('loginName').value;
    let phone = document.getElementById('loginTelefone').value;
    let date = document.getElementById('loginData').value;
    let ID = document.getElementById('loginCPF').value;
    
    if(!user || !user1 || !senha || !senha1 || !confirmacao || !name || !phone || !date || !ID){
       alert("Campos de preenchimento obrigatório. Favor preencher.")
    }else if (senha || senha1 !== confirmacao){
        alert("Confirmação de senha incorreta")
    }
}