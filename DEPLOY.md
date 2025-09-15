# Déploiement TravelBooker

## Étapes locales (XAMPP/WAMP)
1. Importer `schema.sql` dans MySQL.
2. Copier le dossier dans `htdocs/`.
3. Renommer `.env.example` → `.env` et adapter les identifiants.
4. Ouvrir `http://localhost/travel_site_php_mysql/`.

## Avec Docker
1. Lancer : `docker compose up -d`
2. Accéder : http://localhost:8080
3. PhpMyAdmin : http://localhost:8081 (root/example)
