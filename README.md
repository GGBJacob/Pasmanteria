# Pasmanteria

This project is a recreation of online store `https://nadodatek.pl/`.

## Authors: 
- Aleksandra Bujny
- Jakub Romanowski
- Michał Szyfelbein
- Karina Wołoszyn
- Karol Zwierz

## Used Software

- PrestaShop 1.7.8.11
- MariaDB 11.5.2
- phpmyadmin 5.2.1
- Docker V4

## Running

Set `chmod 777 -R [project_directory]` for whole project directory.

`docker compose up` - using Docker Compose V4

Run `chmod 711 scripts/manage_src.sh` and `./scripts/manage_src.sh` to properly setup src directory for further work 
(make sure PrestaShop is running)

Now, you can access project from:

`https://localhost:443/` - front page

`https://localhost:443/admin649wtzb8x` - admin panel


## DB Backup and Restoration

To make a backup execute `sh scripts/backup.sh`. This will create `dump.sql` in the main project directory.

To restore the db execute `sh scripts/restore.sh`. This will take `dump.sql` from the main project directory and resotre database from it.

## SSL generation

```
cd ssl &&
openssl req -x509 -out server.crt -keyout server.key \
  -newkey rsa:2048 -nodes -sha256 \
  -subj "/C=PL/ST=Pomerania/L=Gdansk/O=Gdansk Tech/OU=WETI/CN=localhost" -extensions EXT -config <( \
   printf "[dn]\nCN=localhost\n[req]\ndistinguished_name = dn\n[EXT]\nsubjectAltName=DNS:localhost\nkeyUsage=digitalSignature\nextendedKeyUsage=serverAuth")
```
