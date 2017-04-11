<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Cadastrar um novo livro!</h1>
        
        <form action="gravar.php" method="post">
            <label>
                Título: <br>
                <input type="text" name="titulo">
            </label><br>
            <label>
                Autor: <br>
                <input type="text" name="autor">
            </label><br>
            
                Categoria: <br>
               
                <label>
                    <input type="radio" name="categoria" value="Política">Política
                </label>
                <label>
                <input type="radio" name="categoria" value="Quadrinhos">Quadrinhos
                </label>
                <label>
                <input type="radio" name="categoria" value="Literatura"> Literatura
                </label>
                <label>
                <input type="radio" name="categoria" value="Tecnologia">Tecnologia
                </label><br>
              
            <label>
                Editora: <br>
                <input type="text" name="editora">
            </label><br>
            <label>
                Edição: <br>
                <input type="int" name="edicao">
            </label>
            <br>
            <input type="submit" value="enviar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
