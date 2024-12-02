#!/bin/bash

cd "$(dirname "$0")"

set +a
source ../.env
set -a

# Tworzymy plik konfiguracyjny tymczasowy
cat > /tmp/openssl_config.cnf <<EOF
[dn]
CN=${DOMAIN}
[req]
distinguished_name = dn
[EXT]
subjectAltName=DNS:${DOMAIN}
keyUsage=digitalSignature
extendedKeyUsage=serverAuth
EOF

# Generowanie certyfikatu SSL
openssl req -x509 -out ../ssl/server.crt -keyout ../ssl/server.key \
  -newkey rsa:2048 -nodes -sha256 \
  -subj "/C=PL/ST=Pomerania/L=Gdansk/O=Gdansk Tech/OU=WETI/CN=${DOMAIN}" -extensions EXT -config /tmp/openssl_config.cnf

# Usuwamy plik tymczasowy po zakończeniu
rm /tmp/openssl_config.cnf