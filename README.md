# Pasmanteria

Authors: Aleksandra Bujny, Jakub Romanowski, Michał Szyfelbein, Karina Wołoszyn, Karol Zwierz

## Running

`docker compose up` using Docker Compose V4

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