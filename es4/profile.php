<?php
class profile
{
 public $min;
 public $max;
 public $age;
 public $nome;
 public $gender;
 public $pT;
 public $oS;

 public function __construct (){
        }

 public function setProfile ($nome, $gender, $age, $pT, $oS, $min, $max){
        $this->nome = $nome;
        $this->gender = $gender;
        $this->age = $age;
        $this->pT = $pT;
        $this->min= $min;
        $this->max = $max;
        $this->oS = $oS;
 }


 public function findMatches (){
        $lines = file ("singles.txt");
        $results = array ();
        foreach ($lines as $line){
              list ($nome, $gender, $age, $pT, $oS, $min, $max) = explode ("," , trim ($line));
              $bool=0;
              $arr1 = str_split ($this->pT);
              $arr2 = str_split ($pT);
              if ($arr1[0]== $arr2[0] || $arr1[1]== $arr2[1] ||$arr1[2]== $arr2[2] ||$arr1[3]== $arr2[3])
                  $bool=1;
              if (($this->gender != $gender) && ($this->age >= $min) && ($this->age <= $max) && ($this->oS==$oS) && ($bool=1) &&
             ( $this->min <= $age) && ($this ->max >= $age ) ){
                  $profilo = new profile();
                  $profilo->setProfile($nome, $gender, $age, $pT, $oS, $min, $max);
                  $results[]= $profilo;
              }
        }
        return $results;
 }

  public function write(){
        $singlesFile = fopen ("singles.txt", 'a');
        fwrite($singlesFile, "$this->nome,$this->gender,$this->age,$this->pT,$this->oS,$this->min,$this->max \n");
        fclose ($singlesFile);
 }
}
?>