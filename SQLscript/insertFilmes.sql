INSERT INTO genero (nome)
	VALUES 
		('ação'),
		('suspense'),
		('sci-fi');

INSERT INTO filme (titulo, ano, duracao)
	VALUES
		('Green Room', '2015', '01:35:00'),
		('Mad Max: Fury Road', '2015', '02:00:00'),
		('Blade Runner 2049', '2017', '02:44:00'),
		('Ex Machina', '2014', '01:48:00');

INSERT INTO filme_genero(id_filme, id_genero)
	VALUES
		(1, 2),
		(2, 1),
		(3, 3),
		(4, 3);