<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- icone da guia -->
	<link rel="icon" href="../images/rocket.png">	

    <!-- css -->
    <link rel="stylesheet" href="../css/style-admin-index.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

    <main class="form-login" style="width: 350px;">

        <form  action="cad_userOK.php" method="POST" class="px-4 py-3">

            <div class="text-center mb-4 mt-3">
                <img src="../images/rocket1.png" alt="" style="width: 100px;">
            </div>

            <div class="mb-4 text-center">
                <h1 style="font-size: 1.8rem;">Cadastro de novo Usuário</h1>
            </div>       
            
            <div class="mb-3">
                    <label class="form-label">Digite o nome de usuário</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Digite o seu Login</label>
                    <input type="text" class="form-control" name="login">
                </div>
                <div class="mb-3">
                    <label class="form-label">Digite a sua senha</label>
                    <input type="password" class="form-control" name="senha">
                </div>

            <div class="mb-2" style="margin-top: 25px;">
                <button type="submit" class="btn btn-dark form-control" style="color:#54f8f7;">Cadastrar Usuário</button>
            </div>
        </form>

    </main>

    
</body>
</html>

