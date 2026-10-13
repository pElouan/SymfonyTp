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
DATABASE_URL="mysql://usr_hack:[MOT_DE_PASSE]@127.0.0.1:3306/Hackathon?serverVersion=[version]&charset=utf8mb4"
```
Valeurs à adapter selon votre configuration

En option : Créer la base si celle-ci n'existe pas
```bash
php bin/console doctrine:database:create
```

# TODO 

## Entités

| Entité | Attributs principaux
|---|---|
| [Equipe] | [nom, ...] 
| [Participant] | [nom, prenom, ...]|
| [...] | [...] |

## Fixtures

Générer le jeu d'essai en définissant les fixtures

## Base de données et jeux d'essai (fixtures)
Générer et appliquer les migrations et charger le jeu d'essai :

```bash
indiquer les principales commandes symfony
```

## Test d'interrogation

Requête :

```bash
php bin/console dbal:run-sql "SELECT * FROM [table] LIMIT 5"
```

Résultat (extrait) :

```
[coller ici le résultat]
```

## Difficultés rencontrées
[2 ou 3 lignes maximum]
