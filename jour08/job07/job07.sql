SELECT * FROM etudiants WHERE (YEAR(NOW()) - YEAR(naissance)) >= 18;
