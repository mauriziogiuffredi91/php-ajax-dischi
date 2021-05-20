<?php 
//echo __DIR__ ;

/**
 * Return album
 *
 */

    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'And Justice for All',
            'author' => 'Metallica',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ]
    ];

?>

<main>
    <section>
        <div class="container">
            
            <div class="box-dischi">
                <ul>
                
                    <?php foreach ($database as $value){ ?>

                        <li><img src="<?php echo $value['poster'] ?>" alt="poster logo"></li>

                        <li><h3><?php echo $value['title'] ?></h3></li>

                        <li><h5><?php echo $value['author'] ?></h5></li>

                        <li> <h4><?php echo $value['year'] ?> </h4></li>
                        
                        <li><h5><?php echo $value['genre'] ?></h5></li>
                            
                    <?php } ?>
                
                </ul>
            </div>
            
        </div>

        
    </section>
</main>





                                
                            

                        
                            

                        


                            
                                
                            

                        


                           
                                  
                            
                        


                        
                            
                            
                                
                            
                        