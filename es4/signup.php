<?php require 'profile.php';
       include  'top.html';
?>

    <form action = "signup-submit.php" method "post">
       <fieldset>
                 <legend> New User Signup: </legend>
                 Name: <input type="text" name = "nome" maxlength = "16"> <br/>
                 Gender: <label for = "male"> Male </label>
                         <input type = "radio" name = "gender" id = "M" value = "M" >
                         <label for = "female"> Female </label>
                         <input type = "radio" name = "gender" id = "F" value = "F"> <br/>
                  Age:    <input type = "number" name = "age" min="18" max = "99"> <br/>
                  Personality type: <input type= "text" name ="personality_type" size="6">
                  ( <a href = "http://www.humanmetrics.com/cgi-win/JTypes2.asp"> Don't know your type? </a> ) <br/>
                  Favorite OS:
                  <select name = "oS">
                         <option value="Linux">Linux</option>
                         <option value="Mac">Mac OS X</option>
                         <option value="Windows">Windows</option>
                  </select>  <br/>
                  Seeking age: <input type="number" name="min" min="18" max="99" placeholder ="min"> to
                               <input type="number" name="max" min="18" max="99" placeholder= "max"> <br/>
                  <input type = "submit" value= "Sign Up">
        </fieldset>
    </form> <br/>
 <?php include 'bottom.html'; ?>