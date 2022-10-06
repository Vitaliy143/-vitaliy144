<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/2.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Алта́йский край — субъект Российской Федерации. Входит в Сибирский федеральный округ, является частью Западно-Сибирского экономического района. </p>
                    <p> Образован 28 сентября 1937 года. Административный центр — город Барнаул.</p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 
                    <?php
                        $a = 5;
                        $b = 4;
                        $c = $a * $b;
                        echo $c;
                    ?>   <br>
                     <?php
                        echo $d;
                    ?>

            </div>

            <div class="article">
                <p class="text">
                    Алтайский край расположен на юго-востоке Западной Сибири, на границе континентальной Азии, в 3419 км от Москвы. Территория края составляет 168 тыс. кв. км, по площади занимает 21-е место в Российской Федерации и 6-е место в Сибирском федеральном округе.

На севере край граничит с Новосибирской областью, на востоке – с Кемеровской областью, юго-восточная граница проходит с Республикой Алтай, на юго-западе и западе – государственная граница с Республикой Казахстан протяженностью 843,6 км.

                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
