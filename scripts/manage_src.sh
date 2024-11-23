#!/bin/bash

# Znajdź ścieżkę do folderu bazowego (dwa poziomy wyżej względem skryptu)
BASE_DIR="$(cd "$(dirname "$0")/.." && pwd)"

# Określ ścieżkę do folderu src
SRC_DIR="$BASE_DIR/src"

echo "BASE_DIR: $BASE_DIR"
echo "SRC_DIR: $SRC_DIR"

# Sprawdzenie, czy folder src istnieje
if [ -d "$SRC_DIR" ]; then
    chmod 777 -R "$SRC_DIR"

    # Usuwanie folderów 'admin' i 'install', jeśli istnieją
    for FOLDER in "admin" "install"; do
        if [ -d "$SRC_DIR/$FOLDER" ]; then
            rm -rf "$SRC_DIR/$FOLDER"
        else
            echo "Folder $FOLDER does not exist in $SRC_DIR, skipping."
        fi
    done
else
    echo "Folder $SRC_DIR does not exist, skipping."
    exit 1
fi

echo "Success!"
