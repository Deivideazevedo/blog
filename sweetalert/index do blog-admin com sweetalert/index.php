<?php

    include('../config/connection.php');

    

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
    <script src="../sweetalert/sweetalert.js"></script>

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

            // O MEU:
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
            

        </script>

</head>
<body class="">
    
    <main class="form-login" style="width: 380px;">

    <form action="" method="POST" class="px-4 py-3">
        <div class="text-center mb-4 mt-3">
        <img src="../images/rocket.png" alt="" style="width: 100px;">
        </div>

        <div class="mb-4 text-center">
            <h1 style="font-size: 1.8rem;">Painel Administrativo</h1>
        </div>       
        
        <div class="mb-4">
            <label for="Login" class="form-label">Login</label>
            <input type="text" class="form-control" id="Login" placeholder="Login" name="login">
        </div>
        <div class="mb-4">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" placeholder="Password" name="senha">
        </div>
    
       <div class="mb-2" style="margin-top: 25px;">
            <button type="submit" class="btn btn-primary form-control" name="confirma">Sign in</button>
                <?php

                    if(isset($_POST['confirma'])):

                        session_start();
                        $login = $_POST['login'];
                        $senha = $_POST['senha'];
                    
                    
                        $stmt = $conectar->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");
                        $stmt->bindParam(":LOGIN", $login);
                        $stmt->bindParam(":SENHA", $senha);
                    
                        //$stmt -> bindValue(":LOGIN", md5($senha));           
                        
                        $stmt->execute();
                        
                        if($stmt->rowCount() == 1){
                            $info = $stmt->fetch();
                            /*print_r($info);
                            exit();*/
                            $_SESSION['logado']=true;
                            $_SESSION['id']=$info['id'];
                            $_SESSION['nome']=$info['nome'];
                            $_SESSION['login']=$info['login'];
                            $_SESSION['senha']=$info['senha'];
                    
                            header("Location: view2.php");
                        }else{
                            //VERSÃO LITE:                    
                            //echo "<script> alert('Usuário ou Senha não cadastrados!');</script>";

                            //VERSÃO CUSTOMIZADA                    
                            // echo "<script type='text/javascript'> Swal.fire({ icon: 'error',  title: 'Oops...',  text: 'Login ou Senha Inválidos',}) </script>";

                            //VERSÃO PRO:
                            echo "<script> sweetalert(); </script>";
                                    
                        }
                        
                    endif;            
                ?>  
       </div>
    </form>

    </main>
    
</body>
</html>