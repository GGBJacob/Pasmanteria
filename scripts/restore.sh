#!/bin/bash

cd "$(dirname "$0")"

set +a
source ../.env
set -a

docker exec -i db mariadb --user=${DB_USER} -p${DB_PASSWORD} < ../dump.sql