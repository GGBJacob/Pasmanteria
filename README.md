# Pasmanteria

## Running

`sh startup`

It runs docker compose up as well as DB restoration from the dump.sql.

## Stopping

`sh shutdown`

It runs DB backup to the dump.sql as well as docker compose down.

## DB Backup and Restoration

To make a backup execute `sh scripts/backup.sh`. This will create `dump.sql` in the main project directory.

To restore the db execute `sh scripts/restore.sh`. This will take `dump.sql` from the main project directory and resotre database from it.

## SSL generation
To generate SSL run `sh scripts/ssl.sh`

## Authors
Aleksandra Bujny, Jakub Romanowski, Michał Szyfelbein, Karina Wołoszyn, Karol Zwierz