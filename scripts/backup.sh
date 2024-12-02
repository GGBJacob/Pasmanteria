#!/bin/bash

cd "$(dirname "$0")"

set +a
source ../.env
set -a

docker exec db mariadb-dump --ignore-database=#mysql50#.cache --all-databases --user=${DB_USER} -p${DB_PASSWORD} -x -A > ../dump.sql