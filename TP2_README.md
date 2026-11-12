# TP 2 - Application Web : Response HTTP en mode Client/Serveur

## Prérequis
- PHP [8.4], Composer, Symfony CLI
- MySQL [8.0.34], Doctrine


## Commande de base pour gérer la logique applicative
Composants intervenant dans le cycle de vie d'une requête/reponse HTTP
```bash
```

## Test d'interrogation de l'application web :
URL requêtée :

```bash
http://127.0.0.1:8000/partlist
```

Résultat (extrait) :

```
[{"id":1,"nom":"Nom participant 0","prenom":"Prenom participant 0","email":"email_participant0@test.com","telephone":null,"dateNaissance":null,"lienPortefolio":null},{"id":2,"nom":"Nom participant 1","prenom":"Prenom participant 1","email":"email_participant1@test.com","telephone":null,"dateNaissance":null,"lienPortefolio":null},{"id":3,"nom":"Nom participant 2","prenom":"Prenom participant 2","email":"email_participant2@test.com","telephone":null,"dateNaissance":null,"lienPortefolio":null},{"id":4,"nom":"Nom participant 3","prenom":"Prenom participant 3","email":"email_participant3@test.com","telephone":null,"dateNaissance":null,"lienPortefolio":null},{"id":5,"nom":"Nom participant 4","prenom":"Prenom participant 4","email":"email_participant4@test.com","telephone":null,"dateNaissance":null,"lienPortefolio":null}]
```

## Difficultés rencontrées
[2 ou 3 lignes maximum]
n'avait pas compris que php/symfony se basent sur le nom de fichier et non le nom de fonction (e.g ParticipantDisplayController s'appellait "RandomController" et ne marchait pas)

