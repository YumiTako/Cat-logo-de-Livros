
/*apaga uma base de dados*/
drop database livrosdenis;

/*cria uma base de dados*/
create database livrosdenis;

/*conecta à uma base de dados*/
use livrosdenis;
/*agora precisamos criar tabelas*/
create table livros(
    codigo int primary key auto_increment,
    titulo varchar(50),
    autor varchar (50),
    categoria enum('politica','quadrinhos','literatura','tecnologia'),
    editora varchar(40),
    edicao int(7)    
);
