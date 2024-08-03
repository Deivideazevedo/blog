<?php

    include('../config/connection.php');
    session_start();
    
    
    //isset verifica se possui algum valor, tanto em variaveis, quanto se um nome foi acionado como um input
    if(isset($_SESSION['UserInvalid'])){
    //echo 'A variável EXISTE e deve estao com o valor "sim" do logar.php, logo o if em baixo do main ativa'; 
    //OBS: $_SESSION['UserInvalid'] É UMA VARIAVEL DE SESSÃO!

    }else{
        //echo 'A variável não existe, logo eu preciso atribuir um valor para nao dar erro de variavel indefinida no if abaixo do main';
        $_SESSION['UserInvalid'] = "nao";
    }
    

?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>

    <!-- icone da guia -->
	<link rel="icon" href="../images/rocket.png">	


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- css -->
    <link rel="stylesheet" href="../css/style-admin-index.css">

    <!-- Caminho do arquivo necessário para o sweetalert -->
    <script src="../sweetalert/sweetalert.js"></script> <!-- OU USE O ONLINE: <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --> 
    

     <!-- Script original -->
     <script type="text/javascript">
            function alerta(type, title, mensagem, link){
                Swal.fire({
                    icon: type,
                    title: title,
                    text: mensagem,
                    footer: link,
                    // timer: 1500 //(para um segundo e meio mostrando na tela)
                    //showConfirmButton: false //(para tirar o botao de confirmação)
                });                
            }
            //Basta copiar isso entre scripts para chamar a função a cima
            // alerta("error","Ops","Usuário ou senha inválidos", "<a href='cad_user.php'>Clique aqui cadastrar um novo usuário</a>");

            // O MEU: (para usuarios ou senhas invalidos)
            function sweetalert(){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuário ou senha inválidos!',
                    footer: '<a href="cad_user.php">Clique aqui cadastrar um novo usuário</a>',
                    // timer: 1500 //(para um segundo e meio mostrando na tela)
                    //showConfirmButton: false //(para tirar o botao de confirmação)
                });                
            }

            // (Para usuarios duplicados)
            function sweetalert1(){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Você cadastrou o mesmo usuário e senha mais de uma vez!',
                    footer: 'Remova a(s) duplicação(ões) do banco e tente novamente',
                    // timer: 1500 //(para um segundo e meio mostrando na tela)
                    //showConfirmButton: false //(para tirar o botao de confirmação)
                });                
            }
            

        </script>

</head>
<body class="">
    
    <main class="form-login" style="width: 380px; position:fixed; top: 20%;">

        <form action="logar.php" method="POST" class="px-4 py-3">
            
            <div class="text-center mb-4 mt-3">
            <img src="../images/rocket.png" alt="" style="width: 100px;">
            </div>

            <div class="mb-4 text-center">
                <h1 style="font-size: 1.8rem;">Painel Administrativo</h1>
            </div>       
            
            <div class="mb-4">
                <label for="Login" class="form-label">Login</label>
                <input type="text" class="form-control" id="Login" placeholder="Login" name="login" >
            </div>
            <div class="mb-4">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" name="senha" autocomplete="off"> <!-- impede o navegador de autocompletar -->
            </div>
        
            <div class="mb-2" style="margin-top: 25px;">
                    <button type="submit" class="btn btn-primary form-control" name="confirma" autocomplete="off">Sign in</button>                                      
            </div>
        </form>   
    </main>

    <!-- Sim isso precisa estar aqui para que a mensagem seja exibida! -->
    <?php 
            if ($_SESSION['UserInvalid'] == "sim") {
                //VERSÃO LITE:                    
                //echo "<script> alert('Usuário ou Senha não cadastrados!');</script>";

                //VERSÃO CUSTOMIZADA                    
                //echo "<script type='text/javascript'> Swal.fire({ icon: 'error',  title: 'Oops...',  text: 'Login ou Senha Inválidos',}) </script>";

                //VERSÃO PRO: (tive que colocar top:20% no main porque estava subindo)
                echo "<script type='text/javascript'> sweetalert(); </script>";

                session_unset(); //session_unset(); REMOVE TODAS AS VARIAVEIS DE SESSÃO, para que nao fique em loop com o if de cima
                
            }elseif ($_SESSION['UserInvalid'] == "duplicado") {

                echo "<script type='text/javascript'> sweetalert1(); </script>";

                session_unset(); //session_unset(); REMOVE TODAS AS VARIAVEIS DE SESSÃO, para que nao fique em loop com o if de cima                
            }
        ?>
    
</body>
</html>