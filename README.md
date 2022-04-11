# PI---Hip-Hop-Culture

Desenvolvido como Projeto Integrador, trata-se da versão final do projeto Hip Hop Culture, cujo o objetivo é a conscientização sobre a importância da Cultura Hip Hop na sociedade contemporânea.

![image](https://user-images.githubusercontent.com/64368305/162757303-435cae67-de05-4acc-9d08-8ce31a555a8b.png)

O site conta com uma parte voltada ao usuário, com informações e formulários de contato e "Faça parte", e uma parte voltada ao administrador, com um CRUD completo.

## Usuário:

![image](https://user-images.githubusercontent.com/64368305/162757907-ff7f510f-43bb-48bf-a590-5e147e566ad3.png)


## Administrador:

![image](https://user-images.githubusercontent.com/64368305/162758255-0fa32611-4c86-4358-ac00-0f34840b592d.png)

## Banco de dados:

<div style="background-color:#e6e6e6; font-size:15px; color:#000e47; border-radius:30px;">  
CREATE DATABASE hiphop;
USE hiphop;

CREATE TABLE mensagem(
	idMensagem INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45),
	email VARCHAR (45),
	msg VARCHAR (300)	
);


INSERT INTO mensagem (nome, email, msg) 
VALUES ("Alex", "12191000005@muz.ifsuldeminas.edu.br", "Salve massa, salve rapa");

SELECT * FROM mensagem;



CREATE TABLE solicitacao(
	idSolicitacao INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45),
	idade INT,
	email VARCHAR(45),
	celular VARCHAR(45),
	cidade VARCHAR(45),
	cep VARCHAR(45),
	rua VARCHAR (45),
	numero VARCHAR(10),
	bairro VARCHAR (45),
	escolaridade VARCHAR(45),
	expArtistica VARCHAR(500),
	expHipHop VARCHAR(45),
	disponibilidadeSemanal int,
	obs VARCHAR(300) 
);


INSERT INTO solicitacao 
(nome, idade, email, celular, cidade, cep, rua, numero, 
bairro, escolaridade, expArtistica, expHipHop, disponibilidadeSemanal, obs)
VALUES ("ALK", 18, "alk16.dinastia@gmail.com", "35992747967", "Muzambinho",
"37890-000", "Getúlio Vargas", "120", "Vila Socialista", "EM completo", 
"1 ano de teatro", "1 ano como MC", 7, "já é");

SELECT * FROM solicitacao;

CREATE TABLE administrador (
	idAdm INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45),
	email VARCHAR(45),
	celular VARCHAR(45),
	nomeUsuario VARCHAR(45),
	senha VARCHAR(45)
);

INSERT INTO administrador (nome, email, celular, nomeUsuario, senha)
VALUES ("Alex Martins da Silva", "alk16.dinastia@gmail.com", "35992747967", "alk16", "theanswer");

INSERT INTO administrador (nome, email, celular, nomeUsuario, senha)
VALUES ("Adm da Silva", "adm.teste@gmail.com", "35992747967", "adm", "adm123");

SELECT idAdm FROM administrador WHERE nomeUsuario = "alk16" AND senha = "theanswer";

SELECT * FROM administrador;
</div>
