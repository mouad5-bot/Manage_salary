<!-- SELECT * FROM `cadresuperieur` c INNER JOIN `employe` e WHERE c.employe_id == e.id & salaire >3000 -->
 
SELECT * FROM `employeregulier` WHERE salaire_mensuel > 3000

UPDATE `employeregulier` SET  salaire_mensuel = salaire_mensuel * 1.1

DELETE FROM `gestionnaire` WHERE bonus_annuel < 5000

SELECT AVG(salaire_mensuel) FROM `cadresuperieur` WHERE 1

SELECT nom, salaire_de_base FROM `employe` ORDER BY salaire_de_base DESC