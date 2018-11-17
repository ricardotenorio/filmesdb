CREATE TABLE usuario (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL,
	email VARCHAR NOT NULL,
	senha VARCHAR NOT NULL,
	salt VARCHAR NOT NULL,
	data DATE,

	PRIMARY KEY (id)
);

CREATE TABLE filme (
	id INT NOT NULL AUTO_INCREMENT,
	titulo VARCHAR NOT NULL,
	ano DATE,
	duracao TIME,

	PRIMARY KEY (id)
);

CREATE TABLE usuario_filme (
	id_usuario INT NOT NULL,
	id_filme INT NOT NULL,
	nota INT,

	PRIMARY KEY (id_usuario, id_filme)
	FOREIGN KEY (id_usuario) REFERENCES usuario(id),
	FOREIGN KEY (id_filme) REFERENCES filme(id),
);

CREATE TABLE genero (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR,

	PRIMARY KEY (id)
);

CREATE TABLE filme_genero (
	id_filme INT NOT NULL,
	id_genero INT NOT NULL,

	PRIMARY KEY (id_filme, id_genero)
	FOREIGN KEY (id_filme) REFERENCES filme(id),
	FOREIGN KEY (id_genero) REFERENCES genero(id)
);

CREATE TABLE lista (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR NOT NULL,
	id_usuario NOT NULL,

	PRIMARY KEY (id),
	FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);

CREATE TABLE lista_filme (
	id_lista INT NOT NULL,
	id_filme INT NOT NULL,

	PRIMARY KEY (id_lista, id_filme),
	FOREIGN KEY (id_lista) REFERENCES lista(id),
	FOREIGN KEY (id_filme) REFERENCES filme(id)
);