<!DOCTYPE html>

<head>
    <title>TMNT - Rancid Tomatoes</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="movie.css" type="text/css" rel="stylesheet" />
    <link rel="shortcut icon" type="image/ico" href="http://courses.cs.washington.edu/courses/cse190m/11sp/homework/2/rotten.gif" />
</head>

<body>
    <div id="banner">
        <img  src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/banner.png" alt="Rancid Tomatoes" />
    </div>
    <?php
    global $movie;
    $movie =$_GET["film"];
    list ($name, $data, $value) = file ("$movie/info.txt");
    ?>
    <h1>  <?= $name ?> ( <?= $data ?> ) </h1>
    <div id="main">
        <div class="general_overview">
            <div id="locandina">
            <?php
                echo' <img src= "'. $movie. '/overview.png"/>'; ?>
            </div>

             <?php
                $lines = file ("$movie/overview.txt");
               foreach ($lines as $line){
                   list ($campo, $descrizione)= explode (":", $line)
                   ?>

                  <dt> <?= $campo ?> </dt>
                <dd> <?= $descrizione ?></dd>

            <?php }   ?>

        </div> <!--fine parte destra-->

        <div id="rotten"> <?php if  ($value >= 60) { ?>
            <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/freshbig.png" alt="Rotten" />    <?php }
            else { ?>   <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/rottenbig.png" alt="Rotten" />
            <?php } ?>
            <span class ="33p"> <?= $value  ?>  %</span>
        </div>
        <div id="recensioni">
            <?php $files = glob ("$movie/review*.txt");
              // print count($files)." files";
               // print $files[10];
                for ($i=1; $i<=count($files)&& $i<10; $i++){
                     if (count($files) < 10) {
                     list($comment, $liking, $author, $type)= file ("$movie/review$i.txt");}
                     else { list($comment, $liking, $author, $type)= file ("$movie/review0$i.txt");
                     }
                     $liking =trim ($liking);
                     if ($i%2==1){
                     ?>
                      <div class ="left_part"> <?php } else { ?>    <!---left part for odd reviews -->
                      <div class ="right_part"> <?php } ?>         <!---//right part for even reviews -->
                      <p class = "recensione">
                      <?php if (strcmp ($liking, "ROTTEN") ==0) {    //checking if rotten or fresh  ?>
                            <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/rotten.gif" alt="Rotten" />
                     <?php }else { ?>
                                 <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/fresh.gif" alt="Fresh" />
                      <?php } ?>
                     <q><?= $comment ?> </q>
                     </p>

                     <p class = "name">
                     <img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/critic.gif" alt="Critic" />
                     <?=  $author ?> <br />
                     <?=  $type ?>
                     </p>
                     </div>  <!--- fine div right/left part --->
         <?php }   //fine for ?>


        </div> <!--fine recensioni-->

        <div id ="numpage">  <p>(1- <?= count($files)?>) of <?= count($files)?> </p> </div>
    </div> <!--fine main -->
    <div id = "footer">
        <a href="ttp://validator.w3.org/check/referer"><img src="http://www.cs.washington.edu/education/courses/cse190m/11sp/homework/2/w3c-xhtml.png" alt="Validate HTML" /></a> <br />
        <a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>
    </div>

</body>
</html>
