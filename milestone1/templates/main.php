<?php 

//var_dump(__DIR__ . '/../../milestone2/database.php');

include __DIR__ . '/../../milestone2/database.php'

?>

<main>
    <section>
        <div class="container">
            
            <?php foreach ($database as $value){ ?>
                <div class="box-dischi">
                    <ul>
                    

                        <li><img src="<?php echo $value['poster'] ?>" alt="poster logo"></li>

                        <li><h3><?php echo $value['title'] ?></h3></li>

                        <li><h5><?php echo $value['author'] ?></h5></li>

                        <li> <h4><?php echo $value['year'] ?> </h4></li>
                        
                        <li><h5><?php echo $value['genre'] ?></h5></li>
                                
                            
                    </ul>
                </div>
                
            <?php } ?>
        </div>

        
    </section>
</main>





                                
                            

                        
                            

                        


                            
                                
                            

                        


                           
                                  
                            
                        


                        
                            
                            
                                
                            
                        