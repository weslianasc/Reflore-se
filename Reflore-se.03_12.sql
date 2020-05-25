/*criação do database*/
	CREATE DATABASE reflore_se;

/*criação das tabelas*/

/*criação da tabela usuario*/
	CREATE TABLE `reflore_se`.`usuario` (
	`codigo` INT(100) NOT NULL AUTO_INCREMENT,
	`cpf` INT(11) NULL,
	`cnpj` INT(18) NULL,
	`email` VARCHAR(80) NULL,
	`endereco` VARCHAR(80) NULL,
	`data_nascimento` DATE NULL,
	`nome` VARCHAR(80) NULL,
	`sexo` CHAR(1),
	`senha` VARCHAR(80),
	PRIMARY KEY (`codigo`, `cpf`, `cnpj`, `email`))
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

/*criação da tabela mudas*/
	CREATE TABLE `reflore_se`.`mudas` (
	PRIMARY KEY (`codigo`),
	`codigo` INT(18) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(80) NOT NULL,
	`desc_mudas` VARCHAR(1000) NOT NULL,
	`codigo_instituicao` INT(18) NULL
	)
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

/*criação da tabela pedido*/
	CREATE TABLE `reflore_se`.`pedido` (
	`codigo` INT NOT NULL AUTO_INCREMENT,
	`quantidade` INT NULL,
	`status` VARCHAR(80) NULL,
	`data_pedido` DATE NULL,
	`data_entrega` DATE NULL,
	`codigo_mudas` INT(100) NULL,
	`codigo_usuario` INT(100) NULL,
	`codigo_instituicao` INT(100) NULL,
	`codigo_local` INT NULL,
	PRIMARY KEY (`codigo`))
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

/*criação da tabela pedido de instituição*/
	CREATE TABLE `reflore_se`.`pedido_inst` (
	`codigo` INT NOT NULL AUTO_INCREMENT,
	`quantidade` INT NULL,
	`data_pedido` DATE NULL,
	-- `codigo_mudas` VARCHAR(80) NULL,
	`codigo_mudas_2` INT(100) NULL,
	-- `codigo_usuario` VARCHAR(80) NULL,
	`codigo_usuario_2` INT(100) NULL,
	-- `codigo_instituicao` VARCHAR(80) NULL,
	`codigo_instituicao_2` INT(100) NULL,
	`codigo_local_2` INT NULL,
	PRIMARY KEY (`codigo`))
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

/*criação da tabela local*/
	CREATE TABLE `reflore_se`.`local` (
	`codigo` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(80) NOT NULL,
	`cep` VARCHAR(8) NOT NULL,
	`logradouro` VARCHAR(80) NOT NULL,
	PRIMARY KEY (`codigo`))
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

/*criação da tabela itens*/
	CREATE TABLE `reflore_se`.`itens` (
	`codigo` INT NOT NULL AUTO_INCREMENT,
	`status` VARCHAR(10) NOT NULL,
	`codigo_pedido` INT NOT NULL,
	`codigomudas` INT NOT NULL,
	PRIMARY KEY (`codigo`))
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

/*alteração da tabela usuario - adicionar padrão*/
	ALTER TABLE `reflore_se`.`usuario`
	ALTER sexo SET DEFAULT 'M';

/*alteração da tabela usuario - adicionar unicidade*/
	ALTER TABLE `reflore_se`.`usuario`
	ADD CONSTRAINT uc_senha
	UNIQUE ( senha );

/*alteração da tabela usuario - adicionar chave estrangeira*/
	-- ALTER TABLE `reflore_se`.`usuario`
	-- ADD CONSTRAINT `n_cpf`
	-- FOREIGN KEY (`n_cpf`)
	-- REFERENCES `reflore_se`.`usuariopf` (`cpf`);

	-- ALTER TABLE `reflore_se`.`usuario`
	-- ADD CONSTRAINT `n_cnpj`
	-- FOREIGN KEY (`n_cnpj`)
	-- REFERENCES `reflore_se`.`usuariopj` (`cnpj`);

/*alteração da tabela pedido - adicionar chave estrangeira*/
	ALTER TABLE `reflore_se`.`pedido`
	ADD CONSTRAINT `codigo_usuario`
	FOREIGN KEY (`codigo_usuario`)
	REFERENCES `reflore_se`.`usuario` (`codigo`);

	ALTER TABLE `reflore_se`.`pedido`
	ADD CONSTRAINT `codigo_local`
	FOREIGN KEY (`codigo_local`)
	REFERENCES `reflore_se`.`local` (`codigo`);

	ALTER TABLE `reflore_se`.`pedido`
	ADD CONSTRAINT `codigo_mudas`
	FOREIGN KEY (`codigo_mudas`)
	REFERENCES `reflore_se`.`mudas` (`codigo`);

/*alteração da tabela pedido_inst - adicionar chave estrangeira*/
	ALTER TABLE `reflore_se`.`pedido_inst`
	ADD CONSTRAINT `codigo_usuario_2`
	FOREIGN KEY (`codigo_usuario_2`)
	REFERENCES `reflore_se`.`usuario` (`codigo`);

	ALTER TABLE `reflore_se`.`pedido_inst`
	ADD CONSTRAINT `codigo_local_2`
	FOREIGN KEY (`codigo_local_2`)
	REFERENCES `reflore_se`.`local` (`codigo`);

	ALTER TABLE `reflore_se`.`pedido_inst`
	ADD CONSTRAINT `codigo_mudas_2`
	FOREIGN KEY (`codigo_mudas_2`)
	REFERENCES `reflore_se`.`mudas` (`codigo`);

/*alteração da tabela itens - adicionar chave estrangeira*/
	ALTER TABLE `reflore_se`.`itens`
	ADD CONSTRAINT `codigo_pedido`
	FOREIGN KEY (`codigo_pedido`)
	REFERENCES `reflore_se`.`pedido` (`codigo`);

	ALTER TABLE `reflore_se`.`itens`
	ADD CONSTRAINT `codigomudas`
	FOREIGN KEY (`codigomudas`)
	REFERENCES `reflore_se`.`mudas` (`codigo`);

/*alteração da tabela muda - adicionar chave estrangeira*/ /*---------- TA DANDO ERRO NA CHAVE ESTRANGEIRA -----------*/

	-- ALTER TABLE `reflore_se`.`mudas`
	-- ADD CONSTRAINT `codigo_instituicao`
	-- FOREIGN KEY (`codigo_instituicao`)
	-- REFERENCES `reflore_se`.`usuario` (`cnpj`);


/*---------------------------------------------- POVOAMENTO DA TABELA USUARIO --------------------------------------------*/

	/*Pessoa Fisica*/
	INSERT INTO `reflore_se`.`usuario`
	( nome , data_nascimento, sexo , cpf, cnpj, endereco, email, senha)
	VALUES
	('wes', '2001/09/14', 'F', '12345678901', '', 'Av. Boa Sorte, 1006A', 'wes@gmail.com', '123'),
	('leticia', '1999/01/14', 'F', '65216468', '', 'Av. Sorvete, 10', 'leticia@gmail.com', '123456'),

	-- ('Joãozinho', '2010/12/30', 'M', '11111111111', '', 'Av. das Rosquinhas, 1010', 'joaozinho@gmail.com', '111111'),

	-- ('Marcia', '2005/05/01', 'F', '22222222222', '', 'Av. dos Melancias, 101', 'marcinha@gmail.com', '333333'),

	-- ('Cibelen', '2012/05/01', 'F', '33333333333', '', 'Av. do Biscoito Recheado, 10', 'Cibelen@gmail.com', '4444444'),

	-- ('Leticia', '1997/11/11', 'F', '44444444444', '', 'Av. do Big Big, 100', 'Leticia@gmail.com', '555'),

	/*Pessoa Juridica*/

	
	('xeila', '', '', '', '516565262', 'Av. Brigadeiro, 110', 'xeila@gmail.com', '12345'),
	('cibele', '', '', '', '516565262', 'Av. chocolate, 110', 'cibele@gmail.com', '1');
	-- ('CibelenCabelos', '', '', '', '12.345.678/9012.34', 'Av. dos Casquinha, 102', 'cibelencabelos@gmail.com', '22222'),

	-- ('SamuelBoulos', '', '', '', '22.222.222/2222.22', 'Av. dos Arraia, 009', 'SamuelBoulos@gmail.com', '6666'),

	-- ('XeilaModas', '', '', '', '33.333.333/3333.33', 'Av. dos Zueira, 010', 'XeilaModas@gmail.com', '7777777'),

	-- ('WevinhoSom', '', '', '', '44.444.444/4444.44', 'Av. do Tuts Tuts, 1005', 'WevinhoSom@gmail.com', '888888'),

	-- ('Baiana', '', '', '', '55.555.555/5555.55', 'Av. do Tururu, 015', 'Baiana@gmail.com', '999999');


	/*---------------------------------------------- POVOAMENTO DA TABELA LOCAL --------------------------------------------*/
	
	INSERT INTO `reflore_se`.`local`
	(nome, logradouro, cep)
	VALUES
	('Rua Maria Miriam de Freitas Araújo', '' , '59290-000'),

	('Rua Carteiro Agnaldo','' , '59133-376'),

	('Rua Brusque','' , '59112-490'),

	('Rua São Marcos', '', '59123-316'),

	('Rua Abel Dominguez', '', '59122-155'),

	('Rua Sagrada Família','' , '59114-239'),

	('Rua Porto de Ilhéus',''  , '59127-190'),

	('Rua Alto das Dunas','' , '59122-039'),

	('Av. Barragem Armando Ribeiro','' , '59133-300'),

	('Rua Beira Rio', '',  '59115-280');

	/*---------------------------------------------- POVOAMENTO DA TABELA INSTITUIÇÃO --------------------------------------------*/

	-- INSERT INTO `reflore_se`.instituicao 
	-- ( nome, endereco)
	-- VALUES
	-- ('IFRN - Campus Natal Central', 'Av. Sen. Salgado Filho, 015'),
    
	-- ('Instituição São José do campus', 'Rua Alto da Floresta, 009'),
    
	-- ('IFRN - Campus Natal Zona Norte', 'Rua Brusque, 1005'),
    
	-- ('Instituição São Bernado', 'Avenida Bacharel Tomaz Landim, 102'),
    
	-- ('IFRN - Campus Ceará-Mirim', 'BR - 406, 010'),
    
	-- ('Instituição Maria', 'Rua Antônio Baracho da Costa, 100'),
    
	-- ('Instituição Santana', 'Av. Boa Sorte, 10'),
    
	-- ('Bosque dos Namorados', 'Av. Alm. Alexandrino de Alencar, 101'),
    
	-- ('Instituicao João Inácio', 'Rua do Bonfim, 1010'),
    
	-- ('Instituição Júlia de Alencar', 'Rua Vinte de Novembro, 1029');

	/*---------------------------------------------- POVOAMENTO DA TABELA MUDAS --------------------------------------------*/

	
		
		INSERT INTO `reflore_se`.`mudas` 
		( nome, desc_mudas, codigo_instituicao)
		VALUES
		('Alecrim', 
		'Arbusto muito florífero, excelente para a formação de cercas vivas informais, não muito compactas e com muitas flores. 
		Bastante compacto e rústico, de folhas pequenas. As flores tubulares e amarelas se formam durante todo o ano, com maior
		ênfase na primavera. Sua utilização é ampla, podendo se plantada isolada, em conjunto ou em grupos.
		Devem ser cultivadas em solo fértil sempre a pleno sol, regadas a intervalos regulares. Embora seja muito rústica, não é tolerante
		ao frio e às geadas. Tolera podas. Multiplica-se por sementes e estaquia.', ''),

		('Arruda', 'É uma planta muito popular por suas propriedades aromática e medicinais. Suas folhas são longas, glaucas e compostas, 
		com folíolos oblongos a elípticos de cor verde-acinzentada a azulada. ', ''),

		('Árvore-samambaia', 'É uma árvore bastante interessante para uso paisagístico, devido ao apelo tropical, porte pequeno e copa bem fechada, 
		arredondada e simétrica, que oferece sombra fresca no verão.', ''),

		('Asplênio', 'Com folhas inteiras, que nascem enroladas e tornam-se grandes e de textura dura, o asplênio é uma planta epífita, isto é,
		desenvolve-se sobre outras plantas. No entanto, pode ser cultivada em vasos e canteiros, desde que em locais sombreados.', ''),

		('Babosa', 'A babosa é uma planta suculenta muito versátil e popular, com aplicações medicinais, cosméticas e paisagísticas. As folhas
		se apresentam dispostas em roseta e são longas, carnosas, de cor verde azulada e com bordos denteados por espinhos agudos. ', ''),

		('Canafístula', 'A canfístula é uma árvore decídua a semidecídua, com florescimento decorativo e muito utilizada na arborização urbana
		na América do Sul. Seu porte é grande, alcançando de 15 a 40 metros de altura, com copa ampla e globosa. Apresenta folhas bipinadas, alternas, 
		com foliólulos ovalados e coriáceos. ', ''),

		('Cica', 'Vedete dos jardins contemporâneos e tropicais, a cica se parece com uma pequena palmeira. Suas folhas são longas, rígidas
		e brilhantes, compostos por folíolos pontiagudos. É uma planta dióica, de origem pré-histórica, com crescimento bastante lento, o 
		que a torna muito valorizada no mercado.', ''),

		('Comigo-ninguém-pode', ' é indicada para quem quer afastar o mau-olhado. Diz-se que absorve as energias negativas das pessoas mal
		intencionadas. Sua folhagem muito ornamental é composta de folhas grandes e brilhantes, com manchas rajadas de branco ou amarelo. ', ''),

		('Eritina', 'A eritrina-verde-amarela é uma árvore espetacular, devido principalmente ao colorido de suas folhas. As folhas têm a forma de losango,
		um tanto ovaladas, e a coloração verde, com manchas amarelas recobrindo as nervuras. ', ''),

		('Orquidea', 'O Campylocentrum aromaticum é uma orquídea natural e epífita, de crescimento monopodial e nativa do sudeste e sul do Brasil, 
		essa planta pode ser conhecida por ser perfumada. Ela floresce no outono, despontando pequenas inflorescências, em rácemo, com flores delicadas,
		de cor branca e com a coluna amarela. ', '');

	/*---------------------------------------------- POVOAMENTO DA TABELA PEDIDO --------------------------------------------*/

	/*INSERT INTO reflore_se.pedido 
	( data_pedido, codigo_mudas, codigo_usuario, codigo_local)
	VALUES
	('1', 'aprovado', '2019/01/05', '1', '1', '1'),

	('2', 'em espera', '2019/01/10', '2', '2', '2'),

	('3', 'cancelado', '2019/02/01', '3', '3', '3'),

	('4', 'aprovado', '2019/02/05', '4', '4', '4'),

	('5', 'em espera', '2019/05/09', '5', '5', '5'),

	('6', 'cancelado', '2019/01/30', '6', '6', '6'),

	('1', 'aprovado', '2019/06/05', '7', '7', '7'), 

	('8', 'aprovado', '2019/03/10', '8', '8', '8'),

	('9', 'aprovado', '2019/03/27', '9', '9', '9'),

	('1', 'aprovado', '2019/03/22', '10', '10', '10');

/*criação de função*/
	DELIMITER $

	CREATE FUNCTION desc_sexo ( sexo CHAR (1))
	RETURNS VARCHAR (10)
	
	BEGIN
		IF SEXO = 'M' THEN
			RETURN " MASCULINO ";
		ELSEIF SEXO = 'F' THEN
			RETURN " FEMININO ";
		ELSE
			RETURN " NAO INFORMADO ";
	END IF;
	END
	$

/*criação de procedimento*/

	DELIMITER $
	CREATE PROCEDURE informacao_mudas (a VARCHAR (80))
	BEGIN
		SELECT nome, desc_mudas FROM mudas;
	END
	$
/*criação de visão na tabela usuário*/

	CREATE VIEW visao_usuario AS
	SELECT cpf, data_nascimento, cnpj
	FROM usuario;