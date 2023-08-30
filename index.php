<?php

// Lire le contenu du fichier texte dans un tableau, en excluant les lignes vides
$lines = file("text.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Bouclez chaque ligne et les afficher
foreach ($lines as $line) {
    echo str_pad($line, strlen($line) + 5, " ", STR_PAD_LEFT) . "<br>";
}

