# Pasmanteria

Authors: Aleksandra Bujny, Jakub Romanowski, Michał Szyfelbein, Karina Wołoszyn, Karol Zwierz

## Running

`docker compose up` using Docker Compose V4

run `chmod 711 scripts/manage_src.sh` and `./scripts/manage_src.sh` to properly setup src directory for further work 
(make sure PrestaShop is running)

## DB Backup and Restoration

To make a backup execute `sh scripts/backup.sh`. This will create `dump.sql` in the main project directory.

To restore the db execute `sh scripts/restore.sh`. This will take `dump.sql` from the main project directory and resotre database from it.
