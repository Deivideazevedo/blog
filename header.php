<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meu blog</title>

    <!-- css -->
    <link rel="stylesheet" href="css/style-index.css">

    <!-- awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Bootstrap -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Script original -->
    <script type="text/javascript">
            // O MEU: (para usuarios ou senhas invalidos)
            function sweetalert(){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuário ou senha inválidos!',
                    footer: '<a href="cad_user.php">Clique aqui para cadastrar um novo usuário</a>',
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
<body>
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-expand-lg" id="navba">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/rocket1.png" alt="logo" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active bebas" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bebas" href="category.php?cat=Cat-1">Categoria 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bebas" href="category.php?cat=Cat-2">Categoria 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bebas" href="category.php?cat=Cat-3">Categoria 3</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bebas" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorys
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Subcategoria 1</a></li>
                        <li><a class="dropdown-item" href="#">Subcategoria 2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Subcategoria 3</a></li>
                    </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link bebas" href="./admin">Dashboard</a>
                    </li>
                
                </ul>
                <form action="buscar.php" class="d-flex" role="search" method="POST">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="buscar">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
                    
                </div>
            </div>
        </nav>
    </section>