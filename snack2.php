<?php

/*
Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// Ottengo un'array contenente le chiavi dell'array associativo $posts (quindi le date) .. Procedo in questo modo poichè l'array non ha un indice numerico, ma al suo posto ci sono le date.

$keyPosts = array_keys($posts);
var_dump($keyPosts);



for ($i = 0; $i < count($keyPosts); $i++) {

    // Prendo le singole chiavi
    $data = $keyPosts[$i];
    // Prendo gli array presenti in posts[$data] ($data contiene le diverse date)
    $elemento = $posts[$data];

    for($x = 0; $x < count($elemento); $x++) {
        // Stampo i singoli elementi in posizione [x][chiave] (x viene incrementata ad ogni ciclo)
        echo $elemento[$x]["title"];
    }

}




?>