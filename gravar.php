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
        <?php
       
        //gravação e, banco de dados
        //1- resgatar dados do form
        $txtTitulo = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//Assim você obtém os valores via variável $txtTitulo sem filtro!
if(isset($txtTitulo["txtTitulo"])){
        $titulo= $txtTitulo["titulo"];
        $autor = $txtTitulo["autor"];
        $categoria = $txtTitulo["categoria"];
        $editora = $txtTitulo["editora"];
        $edicao = $txtTitulo["edicao"];
}
                
        //2-abrir conexao com mysql
        $con = mysqli_connect("localhost","root","","livrosdenis");
        
        //3-montar a instrução sql de gravação
        //insert into cliente value(null,'david','david@gmail.com','M')
        $sql= "insert into livros value('".$titulo."','".$autor."','".$categoria."','".$editora."','".$edicao.".)";
        //$sql= "insert into livros value(null,'".$titulo."','".$autor."','".$categoria."','".$editora."','".$edicao."')";
        
        //echo $sql;
        
        //4-executar a instrução sql no mysql
        if(mysqli_query($con,$sql)){
            echo"Cadastrado com sucesso!";
        }else{
            echo"erro ao gravar!";
        }
        //5- fechar a conexão
        mysqli_close($con);   
                       
        ?>
        <br>
        <a href="index.php">Página inicial</a>
        
    </body>
</html>
