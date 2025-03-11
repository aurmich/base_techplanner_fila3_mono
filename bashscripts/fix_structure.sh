#!/bin/bash

# Funzione per spostare le cartelle nella cartella app/
move_to_app() {
    local folder="$1"
    if [ -d "$folder" ]; then
        echo "Sposto $folder in app/$folder"
        mv "$folder" "app/$folder"
    fi
}

# Funzione per rinominare le cartelle in minuscolo
rename_to_lower() {
    local folder="$1"
    if [ -d "$folder" ]; then
        local lower_case=$(echo "$folder" | tr '[:upper:]' '[:lower:]')
        if [ ! -d "$lower_case" ]; then
            echo "Rinomino $folder in $lower_case"
            mv "$folder" "$lower_case"
        else
            echo "Errore: La cartella $lower_case esiste già, non rinominato."
        fi
    fi
}

# Crea la cartella app/ se non esiste
mkdir -p app

# Array di cartelle da spostare in app/
MOVE_TO_APP=("Actions" "Broadcasting" "Casts" "Console" "Emails" "Enums" "Events" "Exceptions" "Jobs" "Listeners" "Mail" "Models" "Notifications" "Observers" "Policies" "Providers" "Rules" "Services" "Traits" "Filesystem" "Http" "Interfaces" "Repositories" "Transformers")

# Array di cartelle da rinominare in minuscolo
RENAME_TO_LOWER=("Config" "Database" "Resources" "Routes" "Tests")

# Sposta le cartelle in app/
for folder in "${MOVE_TO_APP[@]}"; do
    move_to_app "$folder"
done

# Rinomina le cartelle in minuscolo
for folder in "${RENAME_TO_LOWER[@]}"; do
    rename_to_lower "$folder"
done

echo "Operazione completata!"
