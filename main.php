<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11_6_Vladimir_Belyak</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     

            <?php require_once 'menu.inc.php' ?>	    
            <?php require_once 'logo.inc.php' ?>   

        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $welcome  ?> </h1>

            <div class="data">
                <div>
                    <?php  echo '<img class="myImg" src="img/belochka.jpeg">'; ?>                 
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Место жительства: ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p class="text">
                    Белки — милые зверки, которых многие с умилением кормят орешками в парках.
                    Они широко распространены по всему миру, и везде вызывают у людей только позитивную реакцию.
                    Пугливые и шустрые, белки отличаются беззлобным нравом.
                    </p>                    
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  require_once 'knowledge.inc.php'; ?>       
                    <?php
                        echo $a.$b.$c.$d.$e.$f;
                    ?>
            </div>
        </div>

            <?php require_once 'footer.inc.php' ?>

    </div>

</body>
</html>