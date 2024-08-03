<?php 
   
    //isset verifica se possui algum valor, tanto em variaveis, quanto se um nome foi acionado como um input
    if(isset($_SESSION['UserInvalid'])){
        //echo 'A variável EXISTE e deve estao com o valor "sim" do logar.php, logo o if em baixo do main ativa'; 
        //OBS: $_SESSION['UserInvalid'] É UMA VARIAVEL DE SESSÃO!
    
    }else{
            //echo 'A variável não existe, logo eu preciso atribuir um valor para nao dar erro de variavel indefinida no if abaixo do main';
            $_SESSION['UserInvalid'] = "m";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admistrativo</title>

    <!-- icone da guia -->
	<link rel="icon" href="../images/rocket.png">	

    <!-- css -->
    <link rel="stylesheet" href="../css/style-admin-view2.css">
  
    <!-- awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/kkct7b9ci3pp63b6ns800cqg84hnludj1kz6nb94eyogb60t/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#Myeditor', // com # basta copiar o nome depois do # e colar no id do textarea e sem # ele vai colocar uma tag (entao escolha textarea nesse aso)
            spellchecker_language: 'pt_BR', //removendo problemas de ortografias para lingua inglesa
            language: 'pt_BR', // pondo em portugues
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange bold checklist print export formatpainter pageembed code table',
            toolbar_mode: 'floating',
            
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            browser_spellcheck: true,
            contextmenu: true,

        });
    </script>

    
     
    <!-- myTextarea -->
</head>
<body>
    <!-- Menu lateral fixado: ponha col-md-3 e col-lg-2 na nav e no main col-md-9 e col-lg-10 -->
   <div class="container-fluid">
        <div class="row">
            <nav id="slidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                <h2>Bem vindo<br> <?php echo $_SESSION['nome'];?></h2>
                
                <ul class="nav flex-column">
                    <li class="">
                        <div class="d-flex navitem">
                            <label for=""><img src="../images/Dashboard.png" alt="Dashboard" id="imgnav"></label>
                            <a href="view2.php" class="nav-item">DashBoard</a>
                        </div>                        
                    </li>
                    <li class="">                        
                        <div class="d-flex navitem">
                            <label for=""><img src="../images/inserir.png" alt="inserir" id="imgnav"></label>
                            <a href="insert.php" class="nav-item">Inserir</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav flex-column">                   
                    <li class="">                        
                        <div class="d-flex navitem">
                            <label for=""><img src="../images/sair.png" alt="Sair" id="imgnav"></label>
                            <a href="?sair">Deslogar</a>
                        </div>
                    </li>
                </ul>
            </nav>
        
