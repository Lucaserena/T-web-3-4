<?php require 'profile.php';
      include 'top.html' ;
         $nome= $_GET["nome"];   //nome of the user
         $lines = file ("singles.txt");
         $profilo= new profile();
         foreach ($lines as $line){
            list ($nome2, $gender, $age, $pT, $oS, $min, $max) = explode ("," , trim ($line)); //looking for the given username
            if ($nome == $nome2){
                $profilo->setProfile($nome2, $gender, $age, $pT, $oS, $min, $max);
                break;
           }
        }
         if (isset ($profilo->nome)){
             $results = $profilo->findMatches();
         }

         ?>

		Matches for <?= $nome?>
         <div class = 'match'>
         		<?php foreach ($results as $result){ ?>
		    <p> <?= $result->nome ?> </p>
		    <img alt = "user profile"  src = "http://courses.cs.washington.edu/courses/cse190m/12sp/homework/4/user.jpg">
		   		    <ul>
		    <li> gender:  <?= $result->gender ?> </li>
		    <li> age:  <?= $result->age ?> </li>
		    <li> type:  <?= $result->pT ?> </li>
		    <li>  OS:  <?= $result->oS ?> </li>
		      </ul>
		  	<?php	} ?>
		</div>

<?php include 'bottom.html' ?>