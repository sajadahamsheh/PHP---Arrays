<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
 // questions 1
 $color = array('white', 'green', 'red', 'blue', 'black');

    echo"The memory of that scene for me is like a frame of film forever frozen at that
    moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The
    new president and his first lady. - Richard M. Nixon ";

 // questions 2   
   echo "<br>";
   $color1 = array('white', 'green', 'red');
   sort($color1);
   for($i=0;$i < count($color1) ;$i++){
       echo '<ul>';
       echo  '<li>'.$color1[$i].'</li>';
       echo '</ul>';
   }

 // questions 3   
 echo "<br>";
 $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
 "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
 "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
 "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
 "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
 "Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
 "Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest" ) ;

 asort($cities);
 foreach ($cities as $key=>$value){
     echo 'The capital of '.$key ." is " .$value;
     echo "<br>";
     
 }
 
 // questions 4   
 echo "<br>";
 $x = array(1, 2, 3, 4, 5);
 unset ($x[2]);
 $x=array_values($x);
 echo var_dump ($x);

 // questions 5   
 echo "<br>";
 $color2 = array(4 => 'white', 6 => 'green', 11=> 'red');
 echo $color2 [4]; 

  // questions 6 
  echo "<br>";
  $arr=array(1,2,3,4,5);
  $arr[5]=7;
  print_r ($arr);
  ///////or///////
  echo "<br>";
  $arr=array(1,2,3,4,5);
  $arr2=array(7,8);
  array_splice($arr,2,0,$arr2);
  print_r ($arr);

  
  // questions 8A 
  echo "<br>";
  $sortt=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") ;
  function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}
  uasort($sortt,"my_sort");
foreach($sortt as $key=>$value ){
    echo 'my name '.$key. " and im " .$value;
    echo "<br>";

}
 
 // questions 8B 
  echo "<br>";
  function my_sort2($a,$b)
  {
  if ($a==$b) return 0;
    return ($a<$b)?-1:1;
  }
    uksort($sortt,"my_sort2");
  foreach($sortt as $key=>$value ){
      echo 'my name '.$key. " and im " .$value;
      echo "<br>";
  
  }

  
  // questions 8c 
  echo "<br>";
  $sortt=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") ;
  function my_sort3($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?1:-1;
}
  uasort($sortt,"my_sort3");
foreach($sortt as $key=>$value ){
    echo 'my name '.$key. " and im " .$value;
    echo "<br>";

}

 // questions 8D 
 echo "<br>";
 function my_sort4($a,$b)
 {
 if ($a==$b) return 0;
   return ($a<$b)?1:-1;
 }
   uksort($sortt,"my_sort4");
 foreach($sortt as $key=>$value ){
     echo 'my name '.$key. " and im " .$value;
     echo "<br>";
 
 }

 // questions 9
 echo "<br>";
 $rc=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
 );

$sum=0;
for($t=0;$t < count($rc);$t++){
    $sum=$sum+$rc[$t];

}
$avarge=$sum/count($rc);
echo $avarge;
echo '<br>';

sort($rc);
for($t=0 ;$t<7 ;$t++ ){
    echo $rc[$t] ." "; 
}
echo '<br>';
rsort($rc);
for($t=0 ;$t<7 ;$t++ ){
   echo $rc[$t] ." "; 
}
  //there is no question 10
 // questions 11
 echo "<br>";
 $array1 = array(array(70,40), array(25, 45));
 $array2 = array("example", "com");
 var_dump (array_merge($array1,$array2));
   
 // questions 12
 echo "<br>";

function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo 'Actual array ';
print_r($Color);
echo 'Values are in lower case.';
$myColor = array_change_value_case($Color,CASE_LOWER);
print_r($myColor);
echo 'Values are in upper case.';
$myColor = array_change_value_case($Color,CASE_UPPER);
print_r($myColor);

 
 // questions 13
 echo "<br>";
 echo implode(",",range(200,250,4));

 // questions 14
 echo "<br>";
 $arr = array("abcd","abc","de","hjjj","g","wer");
$newArr = array_map('strlen', $arr);
echo "The shortest array length is " . min($newArr) .
". The longest array length is " . max($newArr).'.';

 // questions 15
 echo "<br>";
 $n=range(11,20);
 shuffle($n);
 for ($x=0; $x< 10; $x++)
 {
 echo $n[$x].' ';
 }

 // questions 18
 echo "<br>";
 function Dec($number, $precision, $separator)
{
$nPart=explode($separator, $number);
$nPart[1]=substr_replace($number_part[1],$separator,$precision,0);
if($npart[0]>=0)
{$nPart[1]=floor($nPart[1]);}
else
{$nPart[1]=ceil($nPart[1]);}

$cNumber= array($nPart[0],$nPart[1]);
return implode($separator,$cNumber);
}
print_r(Dec(1.155, 2, ".")."\n");
print_r(Dec(100.25781, 4, ".")."\n");
print_r(Dec(-2.9636, 3, ".")."\n");

 // questions 20
 echo "<br>";

 function list_cmp($a, $b) 
 { 
   global $order; 
 
   foreach($order as $key => $value) 
     { 
       if($a==$value) 
         { 
           return 0; 
           break; 
         } 
 
       if($b==$value) 
         { 
           return 1; 
           break; 
         } 
     } 
 } 
 
 $order[0] = 1;
 $order[1] = 3; 
 $order[2] = 4; 
 $order[3] = 2; 
 
 $array[0] = 2;
 $array[1] = 1; 
 $array[2] = 3; 
 $array[3] = 4; 
 $array[4] = 2; 
 $array[5] = 1; 
 $array[6] = 2; 
 
 usort($array, "list_cmp"); 
 
 print_r($array); 

 // questions 24
 echo "<br>";
 $names = array(
  "color1", "saja40", "saja4", "saja2"
);
sort($names, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($names as $key => $val) {
  echo "names[" . $key . "] = " . $val ;
}

 // questions 17
 echo "<br>";
 function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1)));


?>
 <body>
    
</body>
</html>