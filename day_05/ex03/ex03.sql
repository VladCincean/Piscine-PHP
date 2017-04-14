INSERT INTO ft_table (login, groupe, date_de_creation)
SELECT nom, 'other', CAST(date_naissance AS DATE)
FROM fiche_personne
WHERE nom LIKE '%a%'
AND CHAR_LENGTH(nom) < 9
ORDER BY nom ASC
LIMIT 10;
