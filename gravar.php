<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
       
        $titulo= $_POST["titulo"];
        $autor = $_POST["autor"];
        $categoria = $_POST["categoria"];
        $editora = $_POST["editora"];
        $edicao = $_POST["edicao"];

                
        
        $con = mysqli_connect("localhost","root","","xxxx");
        
       
        $sql= "insert into livros value(null,'".$titulo."','".$autor."','".$categoria."','".$editora."',".$edicao.")";
        //$sql= "insert into livros value(null,'".$titulo."','".$autor."','".$categoria."','".$editora."','".$edicao."')";
        
        
        if(mysqli_query($con,$sql)){
            echo"Cadastrado com sucesso!";
        }else{
            echo"erro ao gravar!";
        }
        
        mysqli_close($con);   
                       
        ?>
        <br>
        <a href="index.php">Página inicial</a>
        
    </body>
</html>
