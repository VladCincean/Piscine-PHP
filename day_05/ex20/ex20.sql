SELECT	g.id_genre AS 'id_genre',
		g.nom AS 'nom genre',
		d.id_distrib AS 'id_distrib',
		d.nom AS 'nom distrib',
		f.titre AS 'titre film'
FROM genre g
RIGHT JOIN film f
ON g.id_genre = f.id_genre
LEFT JOIN distrib d
ON f.id_distrib = d.id_distrib
WHERE (g.id_genre BETWEEN 4 AND 8);
