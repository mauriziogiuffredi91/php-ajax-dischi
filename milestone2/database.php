<?php

require_once __DIR__ . '/../milestone1/doubledata.php';
//echo __DIR__;
/**
 * Return album
 * 
 * -   Attraverso l’utilizzo di Axios: al caricamento della pagina axios chiederà attraverso una chiamata 
 *      API i dischi a php e li stamperà attraverso vue
 */

    // $database = [
    //     [
    //         'title' => 'New Jersey',
    //         'author' => 'Bon Jovi',
    //         'year' => 1988,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
    //         'genre' => 'Rock'
    //     ],
    //     [
    //         'title' => 'Live at Wembley 86',
    //         'author' => 'Queen',
    //         'year' => 1992,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
    //         'genre' => 'Pop'
    //     ],
    //     [
    //         'title' => 'Ten\'s Summoner\'s Tales',
    //         'author' => 'Sting',
    //         'year' => 1993,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
    //         'genre' => 'Pop'
    //     ],
    //     [
    //         'title' => 'Steve Gadd band',
    //         'author' => 'Steve Gadd Band',
    //         'year' => 2018,
    //         'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
    //         'genre' => 'Jazz'
    //     ],
    //     [
    //         'title' => 'And Justice for All',
    //         'author' => 'Metallica',
    //         'year' => 1988,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
    //         'genre' => 'Metal'
    //     ],
    //     [
    //         'title' => 'One more car, one more rider',
    //         'author' => 'Eric Clapton',
    //         'year' => 2002,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
    //         'genre' => 'Rock'
    //     ]
    // ];

    //var_dump($_GET);
    
    
    // $query = (!empty($_GET['author'])) ? $_GET['author'] : 'all';
    // $artisti = [];

    // //var_dump($query);
    // if($query !== 'all'){
        
    //     foreach ($database as $album) {
    //         if (strpos($album['author'], $query) !== false) {
    //             $artisti[] = $album['author'];
    //         }
    //     }
    // }else{
    //     $artisti = $database;
    // }

    $artist = empty($_GET['artist']) ? false : $_GET['artist'];

    //per avere gli album
    $albums = [];

    if ($artist == false || $artist == 'all') {
        $albums = $database;
    } else {
        foreach ($database as $album) {
            if($album['author'] == $artist){
                $albums[] = $album;
            }
        }
    }

    //per ciclare nel database
    $artists = [];
    foreach ($database as $album) {
        if(! in_array($album['author'], $artists)){
            $artists[] = $album['author'];
        }
    }

    //risultato

    $results = [
        'albums' => $albums,
        'artists' => $artists
    ];

   

    

    header('Content-type: application/json');

    echo json_encode($results);

?>