<?php
    include_once('../config/connection.php');

    include_once('session.php');

    $stmt = $conectar -> prepare("SELECT * FROM posts ORDER BY id DESC"); //DES: DECRESCENTE
    $stmt -> execute();

    $results = $stmt -> fetchALL(PDO::FETCH_ASSOC);
    
    include_once('header-view2.php');

    
?>


            <main class="col-md-9 col-lg-10" style="height: 100vh;" id="main">
                <div class="container">
                    <h1 id="main-title">Meus posts</h1>
        
                    <table class="table table-striped table-hover" id="contacts-table">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col" tyle="width: 250px;">Titulo</th>
                            <th scope="col" >Descrição</th>
                            <th scope="col" style="width: 250px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>                   

                        <?php foreach ($results as $post): ?>
                            <tr>                        
                                <td scope="row"><?= $post["id"]?></td>
                                <td scope="row">
                                    <p style="
                                    overflow: hidden;                                    
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    margin: 0;
                                    padding: 0;
                                    word-wrap: break-word;">
                                    <?= $post["title"]?></td>
                                    </p>
                                    
                                <div class="textu" style="margin: 0; padding:0;">
                                <td scope="row">
                                    <p style="                                    
                                    overflow: hidden;                                    
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    margin: 0;
                                    padding: 0;
                                    word-wrap: break-word;
                                    ">
                                        <?= $post["description"]?>
                                    </p>
                                </td>
                                </div>
                               

                                <td class="actions">
                                    <a href="viewBlog.php?id=<?= $post["id"] ?>">
                                        <button type="button" class="btn btn-primary">Ver</button>
                                    </a>
                                    
                                    <a href="editar.php?id=<?= $post["id"] ?>">
                                        <button type="button" class="btn btn-success">Editar</button>
                                    </a>
                                    <a href="delete.php?id=<?= $post["id"] ?>">
                                        <button type="button" class="btn btn-dark">Apagar</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                </div>
            </main>
  
    <!-- Caminho do arquivo necessário para o sweetalert -->
    <script src="../sweetalert/sweetalert.js"></script> <!-- OU USE O ONLINE: <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --> 
     <!-- Script original -->
     <script type="text/javascript">
            // O MEU: (para usuarios ou senhas invalidos)
            function sweetalert2(){
                Swal.fire({
                    icon: 'success',
                    title: 'Operação bem sucedida!',
                    text: 'Postagem apagada com sucesso. ',
                    timer: 1500, //(para um segundo e meio mostrando na tela)
                    showConfirmButton: false //(para tirar o botao de confirmação)
                });                
            }
           
     </script>
    <?php 
     
        if ($_SESSION['UserInvalid'] == "sim") {                
            echo "<script type='text/javascript'> sweetalert2(); </script>";                
            $_SESSION['UserInvalid'] = "";
        }
            
    ?>
<?php include_once('footer-view2.php');?>