# TP1 - Hackathon: mise en place de l'ORM (Object Relational Mapping)

## Prérequis
- PHP [8.4.26], Composer, Symfony CLI
- MySQL [8.0.34]

## Installation

```bash
git clone [https://github.com/pElouan/SymfonyTp]
cd [SymfonyTp]
composer install
```

Créer une base de donnée MySQL nommée "Hackathon"
Créer un utilisateur user_hack & lui donner toutes les permissions sur la base de donnée Hackathon

Créer un fichier `.env.local` avec :
```
DATABASE_URL="mysql://user_hack:[MOT_DE_PASSE]@127.0.0.1:3306/Hackathon?serverVersion=[version]&charset=utf8mb4"
```
Valeurs à adapter selon votre configuration

En option : Créer la base si celle-ci n'existe pas
```bash
php bin/console doctrine:database:create
```
Si modif des fields d'une entity manuellement 
```bash
php bin/console make:entity --regenerate App
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

# TODO 

## Entités

| Entité | Attributs principaux
| [Organisateur] | [nom, siteweb]
| [Hackathon] | [dateHeureDebut, dateHeureFin, lieu, ville, theme] |
| [Participant] | [nom, prenom, email, telephone, dateNaissance, lienPortefolio]|
| [...] | [...] |

## Fixtures

Générer le jeu d'essai en définissant les fixtures

## Base de données et jeux d'essai (fixtures)
Générer et appliquer les migrations et charger le jeu d'essai :

```bash
php bin/console doctrine:fixtures:load
```

## Test d'interrogation

Requête :
```bash
php bin/console dbal:run-sql "SELECT * FROM [table] LIMIT 5"
```

Résultat (extrait) :

```
 ---- ------------------- ---------------------- ----------------------------- ----------- ---------------- ----------------- 
  id   nom                 prenom                 email                         telephone   date_naissance   lien_portefolio  
 ---- ------------------- ---------------------- ----------------------------- ----------- ---------------- ----------------- 
  1    Nom participant 0   Prenom participant 0   email_participant0@test.com                                                 
  2    Nom participant 1   Prenom participant 1   email_participant1@test.com                                                 
  3    Nom participant 2   Prenom participant 2   email_participant2@test.com                                                 
  4    Nom participant 3   Prenom participant 3   email_participant3@test.com                                                 
  5    Nom participant 4   Prenom participant 4   email_participant4@test.com                                                 
 ---- ------------------- ---------------------- ----------------------------- ----------- ---------------- ----------------- 
 ```

## Difficultés rencontrées
[2 ou 3 lignes maximum]
