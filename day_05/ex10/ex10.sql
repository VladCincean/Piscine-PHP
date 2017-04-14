SELECT titre AS 'Titre', resum as 'Resume', annee_prod
FROM film
WHERE id_genre = (
	SELECT id_genre
	FROM genre
	WHERE nom = 'erotic'
);
