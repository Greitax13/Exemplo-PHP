<<<<<<< HEAD
-- Active: 1778499317277@@127.0.0.1@3306@aulaphp
CREATE DATABASE aulaphp;
use aulaphp;
=======
>>>>>>> 1b58698 (VS 1.4)
CREATE TABLE tb_clientes(
   id INT NOT NULL AUTO_INCREMENT,
   nm_nome VARCHAR(40) NOT NULL,
   ds_endereco VARCHAR(40),
   nr_telefone VARCHAR(15),
   ds_email VARCHAR(80),
   CONSTRAINT pk_clientes PRIMARY KEY(id)
<<<<<<< HEAD
)

ALTER TABLE tb_clientes
ADD ds_estcivil TINYINT(1);
=======
);

CREATE TABLE tb_usuario(
   id INT NOT NULL AUTO_INCREMENT,
   nm_usuario VARCHAR(20) NOT NULL,
   nm_login VARCHAR(20) NOT NULL,
   ds_email VARCHAR(80) NOT NULL,
   ds_password VARCHAR(20) NOT NULL,
   CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
>>>>>>> 1b58698 (VS 1.4)
