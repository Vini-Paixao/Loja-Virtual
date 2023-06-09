/*create database db_streetwear;
use db_streetwear;

create table tbl_marca(
id_marca int primary key auto_increment,
nm_marca varchar(45) not null
);

create table tbl_categoria(
id_categoria int primary key auto_increment,
nm_categoria varchar(45) not null
);

create table tbl_produtos(
id_produto int primary key auto_increment,
nm_nome varchar(75) not null,
ds_resumo_produto text not null,
vl_produto decimal (7,2) not null,
nm_color_produto varchar(40) not null,
nm_artigo varchar(8) not null,
ds_img varchar (255) not null,
id_marca int not null,
id_categoria int not null,
qtd_estoque int not null,
prod_lanc char(1) not null,
constraint fk_cole foreign key(id_categoria) references tbl_categoria(id_categoria),
constraint fk_marca foreign key(id_marca) references tbl_marca(id_marca)
);

create table tbl_usuario(
id_usuario int primary key auto_increment,
nm_usuario varchar(80) not null,
sbnm_usuario varchar(80) not null,
cell_usuario char(15) not null,
desc_email varchar(80) not null,
desc_senha char(10) not null,
desc_status boolean not null,
desc_endereco varchar(80) not null,
desc_cidade varchar(30) not null,
num_cep char(11) not null
);

CREATE TABLE tbl_vendas (
  id_venda INT PRIMARY KEY AUTO_INCREMENT,
  nm_ticket VARCHAR(13) NOT NULL,
  id_cliente INT NOT NULL,
  id_produto INT NOT NULL,
  qtd_produto INT NOT NULL,
  vl_produto DECIMAL(7,2) NOT NULL,
  vl_total DECIMAL(10,2),
  data_venda DATE NOT NULL
);

DELIMITER //

CREATE TRIGGER calc_vl_total BEFORE INSERT ON tbl_vendas
FOR EACH ROW
BEGIN
  SET NEW.vl_total = NEW.qtd_produto * NEW.vl_produto;
END;
//

DELIMITER ;*/

insert into tbl_usuario values
(default,'Marcus','Paixão','11981996294','marcus@emperium.com','marcus2022','1','Rua Floresto Bandecchi','São Paulo','05336-010'),
(default,'Pedro','Alves','11997376826','pedro@emperium.com','pedro2022','1','Rua das Filipinas','São Paulo','01226-010'),
(default,'Maycon','Tavares','11988397775','maycon@emperium.com','maycon2022','1','Rua dos Canários','São Paulo','05329-030');

insert into tbl_marca values 
(default,'Chronic'),
(default,'Nike'),
(default,'Wanted'),
(default,'HIGH'),
(default,'Trasher'),
(default,'Diamond'),
(default,'Fire Appel'),
(default,'Overcome'),
(default,'Santa Cruz');

insert into tbl_categoria values 
(default,'Peita'),
(default,'Calça'),
(default,'Blusa'),
(default,'Acessórios');

insert into tbl_produtos values
(default,'Camiseta Chronic - Skull','Camiseta Plus Size, 100% algodão','140.0','Preto','1.22','Chronic Skull P.png','1','1','10','S'),
(default,'Camiseta Wanted - OL','Camiseta Plus Size em 100% algodão','159.90','Branco','1.22','Wanted OL.png','3','1','10','N'),
(default,'Camiseta Diamond - Bunny','Camiseta Plus Size em 100% algodão','189.90','Preto','1.22','Diamond Bunny.png','6','1','10','N'),
(default,'Camiseta Santa Cruz - Scream','Camiseta Plus Size em 100% algodão','190.00','Branco','1.22','SC Scream B.png','9','1','10','N'),
(default,'Calça Cargo Fire','100% Algodão','129.90','Preto','1.22','Fire Cargo P.png','7','2','10','S'),
(default,'Calça Overcome - Strip','100% Poliéster','189.90','Preto e Branco','1.22','Overcome Strip.png','8','2','10','N'),
(default,'Calça Santa Cruz - Painters','Sarja','210.00','Azul Marinho','1.22','Calca SC.png','9','2','10','N'),
(default,'Calça Thrasher - Painters',' 70% algodão e 30% poliéster','215.90','Preto','1.22','Calca Flame.png','5','2','0','N'),
(default,'Corta Vento Nike','100% de fibras de poliéster recicladas','499.90','Preto','1.22','Corta Vento Nike.png','2','3','10','N'),
(default,'Moletom Diamond Careca','50% algodão e 50% poliéster','259.99','Preto','1.22','Moletom Diamond.png','6','3','0','N'),
(default,'Moletom Wanted','100% algodão','224.92','Preto','1.22','Moletom Wanted.png','3','3','10','N'),
(default,'Moletom High','100% algodão','429.99','Branco','1.22','Moletom High.png','4','3','10','S'),
(default,'Five Panel Chronic','Boné estilo Five Panel','80.00','Preto','1.22','Five Panel Chronic.png','1','4','10','S'),
(default,'Shoulder Big Bag Fire','100% poliéster','139.90','Preto','1.22','Shoulder Bag Fire.png','7','4','10','N'),
(default,'Chinelo Overcome','Tira única','79.90','Preto','1.22','Chinelo Overcome.png','8','4','10','N'),
(default,'Cordão Wanted','Fecho abre fácil','20.00','Preto','1.22','Cordao Wanted.png','3','4','10','N');

create view vw_produto as
select 	tbl_produtos.id_produto,
		tbl_produtos.nm_nome,
		tbl_produtos.ds_resumo_produto,
		tbl_produtos.vl_produto,
		tbl_produtos.nm_color_produto,
		tbl_produtos.nm_artigo,
		tbl_produtos.ds_img,
		tbl_produtos.qtd_estoque,
		tbl_produtos.prod_lanc,
		tbl_marca.nm_marca,
		tbl_categoria.nm_categoria
from tbl_produtos inner join tbl_categoria 
	on tbl_produtos.id_categoria = tbl_categoria.id_categoria
inner join tbl_marca 
	on tbl_produtos.id_marca = tbl_marca.id_marca;
    
create view vw_venda as
select 	tbl_vendas.nm_ticket,
		tbl_vendas.id_cliente,
		tbl_vendas.data_venda,
		tbl_vendas.qtd_produto,
		tbl_vendas.vl_total,
        tbl_produtos.nm_nome
from tbl_vendas inner join tbl_produtos 
	on tbl_vendas.id_produto = tbl_produtos.id_produto;

/*select * from vw_produto where nm_nome like '%Chronic%';
select nm_nome, ds_img, vl_produto, qtd_estoque from vw_produto;

select * from vw_produto;
select * from vw_venda;

update tbl_produtos set nm_nome = 'Moletom High Medusa' where id_produto = '12';

/*drop table tbl_produtos;
drop view vw_venda;