SELECT	COUNT(m.id_membre) AS 'nb_abo',
		FLOOR(AVG(a.prix)) AS 'moy_abo',
		SUM(a.duree_abo) % 42 AS 'ft' 
FROM membre m
INNER JOIN abonnement a
ON m.id_abo = a.id_abo;
