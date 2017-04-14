SELECT UPPER(fp.nom) AS 'NOM', fp.prenom, ab.prix
FROM fiche_personne AS fp
INNER JOIN membre AS me
ON fp.id_perso = me.id_fiche_perso
INNER JOIN abonnement ab
ON me.id_abo = ab.id_abo
WHERE ab.prix > 42
ORDER BY nom ASC, prenom ASC;
