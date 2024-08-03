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
</head>
<body class="">
    
    <main class="form-login" style="width: 380px;">

    <form action="logar.php" method="POST" class="px-4 py-3">
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
        <button type="submit" class="btn btn-primary form-control">Sign in</button>
       </div>
    </form>

    </main>
    
</body>
</html>