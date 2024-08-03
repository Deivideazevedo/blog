<!DOCTYPE html>
<!--
Exemplo de como executar uma função PHP disparada por um botão simples através de JavaScript.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #formulario{
                margin-left: auto;
                margin-right: auto;
                width: 80%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            ul{
                padding: 2px;
                background-color: gray;
                display: flex;
                list-style: none;
                border: none;
                float:left;
            }
            li {
                padding-left: 10px;
                padding-right: 10px;
                cursor: pointer;
            }
            li:hover {
                background-color: white;
            }
        </style>
    </head>
    <body> 
        <h1>chamando o PHP através do JavaScript</h1><hr>
        
        <div id="formulario">
            
        </div>
        
        <script type="text/javascript">
            function criar(){
                //Setando o elemento que vai receber o codigo gerado pela execução do PHP
                var divFormulario = document.getElementById("formulario");
                divFormulario.innerHTML = "<?php criaMenu(); ?>";  //Execução do codigo PHP
            }
            
        </script>
        
        <!-- Botão simples que faz a chamada a função em JavaScript que executa o PHP  -->
        <input type="button" value="Criar menu" onclick="criar()"><br>
                
        <?php
        
        //Função em PHP que criar a lista
        function criaMenu(){
            $msg = 'Location: javacomphp.php';
                // header('Location: javacomphp.php');
        }         
        
        ?>
    </body>
</html>