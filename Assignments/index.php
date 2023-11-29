

<?php

/*assigment 6

echo (int)15.2 + (int)14.7 + (10.5 + 10.5); 
echo '<br>';
echo gettype((int)15.2 + (int)14.7 + (int) (10.5 + 10.5)); // Integer

*/


/*assigment 7

echo var_dump(100);
echo'<br>';
echo gettype(100);
echo'<br>';

 */



 /*ass 8 

 echo 'Hello "Elzero" \\\ """ We Love "$$PHP"';

*/

/*ass 9

echo nl2br("We \n Love \n Elzero \n Web \n School");

*/


/*ass 10

echo <<< 'now'

Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"

now;

*/


/* ass 11
$something = "Programming";

echo <<< code
          Hello \PHP\
          We Love $something
        code;


        */


        /* ass12

echo gettype((int)"Hello PHP");

echo '<br>';

echo  true + (int)"Hello PHP";

*/


/* ass 13


echo '<pre>';

print_r([
"forntend" =>[

  0 => 'html',
  1 => 'css',
  'js' => [
  'vuejs' => [

    2 =>'vs',
    3 => 'v3'
  ],
  0 =>'react',
  1 => 'sev'
  ]
],
'backend' => [

0 => 'php',
1 => 'mysql',
2 => 'Security'
],

0 => 'git',
1 => 'githup',
'Testing' => [
  0 => 'Unit Testing',
  1 => 'End To End',
  2 => 'Integration'
]

]);

echo  '</pre>';

 */

/*   ass 2       // 13 to 19

 $name = "elzero";
 $$name = "Web";

 echo "${$name}";
 echo '<br>';
 echo "$elzero";
 echo '<br>';
 echo "";

*/

/*   ass 3 

$a = 200;
$a = 100;
$b = $a;  

echo $b;

*/



/* ass 2                                     20 to 29*******
$a = "10";

echo +$a;
echo '<br>';
echo gettype(+$a);
echo '<br>';


echo 20 - $a;
echo '<br>';
echo gettype(20-$a);
echo '<br>';

echo (int)$a;
echo '<br>';

echo gettype((int)$a);

*/


/*ass 3 

$a = 10;
$b = 20;

  echo $a <=> $b;
*/


/* ass 4 

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c >= $a); // True
var_dump($a <= $b); // True
var_dump($a != $b); // True
var_dump($a <  $c); // True
var_dump($a <> $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True

*/

/* ass 5

$points = 10;

$points++;
$points++;
$points++;

echo $points; // 13

$points--;
$points--;
$points--;
$points--;
$points--;

echo $points; // 8;

*/

/* ass 6 
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
//$d = $a." " .$b." " .$c;
//echo $d;

// Method Two
//$d = "$a $b $c" ;
//echo $d;

// Method Three
 //$d = "{$a} {$b} {$c}";
 //echo $d;

// Method Four
// $d = ;

*/

/*********  ass8 
// Code 1
  $a = @$b or die("not found");

echo "<br>";

// Code 2
$f = @file("Not_A_File") or die("file not found");

echo "<br>";

// Code 3
(@include("Not_A_File")) or die(" include not found");
*/



                                   /////// from 30 to 42*****************

/* ass 1

$a = 100;
$b = 200;
$c = 100;


  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"


if($b > $a && $a === $c && ($a + $c) ===$b  )
{

  echo "yes";
}
else{

  echo "no";
}

*/


/*ass 2 ***********

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B



if($a > $b)
{
  echo "A Is Larger Than B";
}
else if($a > $c){

  echo "A is large than c";
}
else
{

  echo "A Is Not Larger Than B Or C";
}

*/


/* ass 3 ************************

$admins = ["Osama", "Ahmed", "Sayed"];



if($_SERVER["REQUEST_METHOD"] === "POST")
{
if (in_array($_POST["user"],$admins))
{
  echo "The Request Method Is Post And Username Is ". $_POST["user"];
}
else
{
  echo "no";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

</body>
</html>

*/

/* ass 4 ******************

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}

echo ($a + $b === $c) ?  'A + B = C' : (($a + $c === $b) ? 'A + C = B' : '')  (($b + $c === $a) ? '"B + C = A"';

 */
 


/*   ass 6 ***************

 $genre = "Hack And Slash";

switch($genre)
{
  case "RPG":
    echo "I Recommend Ys Games";
    break;

    case "Hack And Slash" :
      echo "I Recommend Castlevania Games";
      break;

      case "FPS" :
        echo "I Recommend Uncharted Games";
        break;

        default :
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
*/


/* ass 7**************
$num_one = 23;
$num_two = 5;
$op = "/";

switch($op)
{
  case "+":
    echo $num_one + $num_two ;
    break;

    case "-":
      echo $num_one - $num_two ;
      break;

      case "*":
        echo $num_one * $num_two ;
        break;

        case "/":
          echo (int)($num_one / $num_two) ;
          echo "<br>";
          echo $num_one % $num_two;
          break;
}

*/

/* ass 8 ******************

$day = "Mon";

if($day == "Sat" || "Sun" || "Mon")
{
  echo "We Are Open All The Day";
}
elseif($day == "wen" || "tue")
{

  echo "We Are Open From 08:12";

}
elseif($day == "thu" || "fri")
{

  echo "We Are Closed";
}
else{


  echo "Unknown Day";
}
*/



/*ass 9 ***********
$index = 10;

 // for($i = $index; $i > 0 ; $i--)
 // {
 //   echo $i . "<br>";
 // }
   

while ($index > 0)
{
  echo $index . "<br>";
  $index--;
}

*/


/* ass 10 **************

$index = 0;

for($i = $index ; $i < 20;)
{
  $i += 2;
  echo $i . "<br>";
  
}

do
{
  $index +=2;
  echo $index;
}
while($index < 20);

*/

/*  not completed  ass3***********************
$numm = 0;
$num = 2;

while ($num < 520) {
 
  $num = pow($num , $numm);
  echo $num . "<br>";


  if($num == 2)
  {
    $num--;
  }

  $numm = $numm + 3;

}

*/

/* ass4 ****************

$start = 10;
$end = 0;
$stop = 3;

for($i = $start; $i >=   $stop; $i--)
{
  if($i == $start)
  {
    echo $i . "<br>";
  }
  else
  {
  echo $end . $i . "<br>";
  }


}

*/


/* ass5 ***********

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];


for($i = $start; $i < count($mix); $i++)
{
    if($mix[$i] == $mix[0] || is_string($mix[$i]))
    {
      continue;
    }
    echo $mix[$i] . "<br>";
}

*/


/*ass6 *************

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $country => $value)
{

  echo "the name is $country and i need $value from him.". "<br>";
}

*/


/* ass7**************
$cout =0;
$coutt = 0;
$mix = [1, 2, "A", "B", "C", 3, 4];

for($i = 0; $i < count($mix); $i++)
{
    if( is_string($mix[$i]))
    {
      $cout++;
      continue;
    }
    echo $mix[$i] . "<br>";
    $coutt++;
    
}

echo $cout . " Letters Ignored" . "<br>";
echo $coutt . " Numbers Printed" . "<br>";

*/


/*ass8 ************

$nums = [1, 13, 12, 20, 51, 17, 30];

for($i = 0; $i < count($nums); $i++)
{
  if($nums[$i] % 2 != 0)
  {
    continue;
  }
  echo ($nums[$i] / 2) . "<br>"; 

}

*/

/* ASS9 **************

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for($i = 0; $i < $names; $i++)
{
  if ( $nums[$i] - $help_num == 2 || $nums[$i] - $help_num == 3)
  {
    echo $names[$i] . "<br>" ;
  }

}

*/


/* ass10   not completed
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $values)
{
    

}

*/////////


/* ass 1                           from 43 to 52*******************
function greeting($name , $gender="" )
{

  if($gender == "male")
  {
    echo "Hello Mr . $name";
      echo "<br>";
  }
  elseif($gender == "female")
  {
    echo "Hello Mrs . $name";
    echo "<br>";
  }
  else
  {
    echo "Hello . $name";
  }

}


// Needed Output
echo greeting("Osama", "male"); // Hello Mr Osama
echo greeting("Eman", "female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh

*/



/* ass2******

function get_arguments(...$array)
{

    $all = "";
   foreach($array as $value)
   {  

   $all .= $value . " " ;
      
   }
   return $all . "<br>";
}


// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP

*/




/* ass3*****************


function sum_all(...$nums)
{

  $all = 0;
  foreach($nums as $value)
  {  

  if($value == 5)
  {
    continue;
  }
  if($value == 10)
  {
    $value = 20;
  }
  
  $all += $value . " " ;

  }

  return $all . "<br>";

}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40

*/




/* ass4******************

function multiply(...$nums)
{

  $all = 1;

  foreach($nums as $values)
  {

  if(is_string($values))
  { 
    continue;
  }
  if(is_float($values))
  {
    $values = (int)$values;
  }

  $all *= $values;
  }

  
  return $all . "<br>";


}

// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000

*/


/* ass5 **************

function check_status($a, $b, $c) {
  
    

     $values = [$a , $b , $c];
     $stri = '';
     $intt = 0;
     $booo = true;

      foreach ($values as $sym)
      {
        if(is_string($sym))
        {
          $stri = $sym ;
        }
        else if(is_int($sym))
        {
          $intt = $sym;
        }
        else{
          $booo = $sym;
        }         
      }

        return  "Hello $stri , Your Age Is $intt , You Are" .($booo == true ? " " : " not ")."Available For Hire" . "<br>";

}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

*/




/* ass6 ********
function calculate($num1 , $num2 , $name = "+" )
{
 
  switch ($name)
  {
    case "+" ;
    case "add" ;
    case "a";

    return $num1 + $num2 ."<br>";
    break;

    case "-" ;
    case "subtract";
    case "s";

    return $num1 - $num2 ."<br>";
    break;

    case "*";
    case "multiply";
    case "m";

    return $num1 * $num2 ."<br>";
    break;

    default:
    "";
  }    

}

echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200

*/




/*ass 7 *******************

function calculate(int $num_one, int $num_two) {

    $dd = 0;

  if(gettype($num_one + $num_two) == "integer")
  {
   $dd = (double)($num_one + $num_two);
  }
  return $dd;
}

echo calculate(20, 10); // 30
echo gettype(calculate(20, 10)); // Double

*////


/* ass8********************

$message = "Hello";

$Hello = function($someone) use ($message)    //anonymous function 
{
    return "$message $someone";
};

echo $Hello("Osama"); // Hello Osama

*/


/* ass9***********************

$greet = fn($someone) => "hello  $someone";    //arrow function 

// Needed Output
echo $greet("Osama"); // Greetings


*/

                   //      *************    string functions assignment*****************//

/* ass 1 
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";


str_split($str);          // makes the string an array

$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;

echo "<br>";
echo $str; // Elzero
*/



/* ass 2

$str = "Orezle";

 echo ucfirst(strtolower(strrev($str)));



// Elzero

*/





 /*ass 3 ***

$str = 'aAa';
$num = 3;
$char = "_";


echo strtolower(chunk_split(str_repeat($str , $num) , 3 , '_'));



// aaa_aaa_aaa_

*/




/* ass4*************

echo strip_tags($str = "<div><b>Elzero</b></div>" , '<b>');

// <b>Elzero</b>

*/



/*************************  ass  5
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str , $e , $four). "<br>";

echo substr_count(strstr(strtoupper($str),"S") , $o ). "<br>";


// 2

*/


/* ass 6***********
$chars = ["E", "l", "z", "e", "r", "o"];

echo implode($chars);


*/


/* ass 7***************
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$new_chars =[];

for($i = 0; $i < count($chars); $i++)
{
  if(is_int($chars[$i]))
    continue;
  else
    $new_chars[$i]= $chars[$i];
  
}

echo implode($chars) . "<br>";

echo ucfirst(strtolower(implode($new_chars))) . "<br>";  //Elzero

*/////////


/*                                     //array function// ************************/


/* ass 1****************

$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

// Output


echo "<pre>";
print_r(array_chunk(array_change_key_case($friends),2,true));
echo "<pre>";

*/




/* ass2 ********************

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];


echo "<pre>";
print_r(array_change_key_case(array_combine($codes,$means)));
echo "<pre>";


*////






/*ass 3 ****************

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

// Output

echo "<pre>";

print_r(array_change_key_case(array_reverse(array_flip($friends),true)));
echo "<pre>";

*/


/* ass4*****
$nums = [10, 20, 30];

// Output



$add = function ($x, $y) {
	return $x + $y;
};



echo array_reduce($nums,$add);  //anonyms func

echo "<br>";

echo array_reduce($nums,fn($x,$y) => $x + $y);  // arrow func

*/////





/*aSS5 **************

$nums = [5, 10, 20, 5, 30, 40];

$add = function ($x, $y) {
  return $x + $y;
};

$check = function ($x) { 
	return $x > 5;
};

echo array_reduce(array_filter($nums,$check),$add);


*///



/*ass6 *****************

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;


echo "<pre>";
print_r(array_pad($chars,10,$char[$zero]));
echo "<pre>";

*///






/* ass7****************

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];


array_shift($names);
array_shift($names);

echo current($names) . "<br>";  // "Sayed"

sort($names);     //ali mahmoud sayed

echo current($names) . "<br>"; // "Ali"

array_unshift($names,"Osama");   // osama ali mahmoud sayes

echo current($names) . "<br>"; // "Osama"

array_shift($names);
array_shift($names);

echo current($names) . "<br>"; // "Mahmoud"


*//////////////




/* ass8******************


$chars = ["A", "B", "C"];


array_push($chars, "D");   //1

$chars [] = "D";   //2


echo "<pre>";
print_r($chars);
echo "<pre>";


echo "<pre>";
print_r(array_pad($chars,6,"D"));   //3
echo "<pre>";


*////




/* ass 9 ********

$nums = [1, 2, 3, 4, 5, 6];


echo "<pre>";
print_r(array_slice($nums,-5,-2));
echo "<pre>";


*///




/* ass10


$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];


$remove = function($value)
{
  return is_int($value);
};

$array2 = array_merge(array_filter($mix,$remove),$nums);

ksort($array2);
sort($array2);

echo "<pre>";
print_r($array2);
echo "<pre>";

*/





/* ass 11 ********************

$arr = ["A", "B", "C", "D", "E"];

  $count = 0;
  
foreach($arr as $values)
{
  while($values != NULL)
  {
    $count ++ ;
    break;
  }
}

echo $count;

*////





/* ass 12 *************
$nums = [11, 2, 10, 7, 20, 50];

$count = 0;


foreach($nums as $values)
{
  while($values)
  {
     $count += $values ;
     break;
  }
} 

echo $count;

*///




/* ass 13**************
$nums = [10, 100, -20, 50, 30];

$max = 0;
$max2 = 0;

for($i = 0; $i < count($nums); $i++)
{
    if($max < $nums[$i])
      {
        $max = $nums[$i]; 
      }
}

echo $max . "<br>";

//another way

foreach($nums as $values)
{
  while($values>$max2)
  {
     $max2 = $values;
  }
}
echo $max2 . "<br>";


*///////



/* ass 14**************
$nums = [10, 100, -20, 50, 30];

$max2 = 0;

foreach($nums as $values)
{
  while($values<$max2)
  {
     $max2 = $values;
  }
}
echo $max2 . "<br>";

*/////////////


/* ass15***********

$chars = ["o", "r", "e", "z", "l", "E"];

$count = 0;
$arr = [];

foreach($chars as $values)
{
  while($values != NULL)
  {
    $count ++ ;
    break;
  }
}


for($j = 0; $j < $count; $j++)
{
  $arr[$j] = $chars[$count - $j - 1];
}


echo "<pre>";
print_r($arr);
echo "<pre>";
*/






/* ass16
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

 // way one**

function pro($value)                
{
  if(is_int($value) && $value % 2 != 0)
  return $value ;
  
}

$arr = array_filter($mix,'pro');
sort($arr);

echo "<pre>";
print_r($arr);
echo "<pre>";

echo "<br>";


                           //way two**

$newarr = [];
$count = 0;

foreach($mix as $value)
{
  while($value != NULL)
  {
        $count++;
        break;
  }
}

for($i = 0; $i < $count; $i++ )
{
  if(is_int($mix[$i]))
  {
    if($mix[$i] % 2 != 0)
    { 
      $newarr[$i] = $mix[$i];
    }

  }
}

echo "<pre>";
print_r($newarr);
echo "<pre>";

*////




/* ass 17*****************

$nums = [1, 2, 3, 4, 5, 6];
$nwe =[];

 for($i=0; $i < count($nums); $i++)
 {
   do
    {
     $num = rand(1,6);
    }while(in_array($num,$nwe));  
      $nwe[$i] = $num;      

 }

 echo "<pre>";
 print_r($nwe);
 echo "<pre>";

 */////



  /* ass 18*******

 $title = "E&z\$r0 W\$b Sch00&";
 $signs = ['&' , '$' , '0' ];
 $replaces = ['l' , 'e' , 'o'];  
  $count = 0;
  $arr = str_split($title);
  $arrr = str_split($title);

  //way one

for($i =0; $i <count($arr); $i++)
{
  if($arr[$i] == '&')
  {
    $arr[$i] = 'l' ;
    $count++;
  }
  if($arr[$i] == '$')
  {
    $arr[$i] = 'e' ;
    $count++;

  }
  if($arr[$i] == '0')
  {
    $arr[$i] = 'o' ;
    $count++;

  }
}
echo implode($arr) . ",, and replaces are : " . $count . "<br>";


//way two
echo implode(str_replace($signs,$replaces,$arrr,$countt)). "<br>";
echo $countt;

*/




                                                //filter funcions//***** */


 /* ass 1*****                                               
echo mt_rand(11,19);

*/



/* ass 2 *********

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[rand(0,3)];

*///



/* ass3***********

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7


echo round($num1,0,PHP_ROUND_HALF_DOWN) . "<br>" ;
echo round($num2,1). "<br>";
echo round($num3,0,PHP_ROUND_HALF_DOWN). "<br>";

*/



/* ass 4
$array = filter_list();
$keyy = [];

for($i = 0; $i < count($array); $i++)
  {
    $keyy[$i] = filter_id($array[$i]);
  }
  
  $new = array_combine($keyy,$array);

  echo "<pre>";
  print_r($new);
  echo "<pre>";

  */



  
/* ass 5****

  $url1 = "http://www.elz ero.org";
  $url2 = "http://¥elzero.org";
  $url3 = "https://elzero.org";
  $url4 = "https://elzero.o¥rg";
  
  
echo filter_var($url1,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)? "yes" : "Not A Valid URL";
echo "<br>";
echo filter_var($url2,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)? "yes" : "Not A Valid URL";
echo "<br>";
echo filter_var($url3,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)? "A Valid URL" : "Not A Valid URL";
echo "<br>";
echo filter_var($url4,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE)? "yes" : "Not A Valid URL";
echo "<br>";
*/




/* ASS6************
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1,FILTER_SANITIZE_URL) ."<br>";
echo filter_var($url2,FILTER_SANITIZE_URL) ."<br>";
echo filter_var($url3,FILTER_SANITIZE_URL) ."<br>";
echo filter_var($url4,FILTER_SANITIZE_URL) ."<br>";
*/


                                            //file functions


/* ass1    **************                                    
echo round((disk_total_space('C:') + disk_total_space('D:') + disk_total_space('E:'))/ 1024 / 1024 / 1024 / 1024 , 2);

*/


/*ass2*********
echo "size in kilobyte : " . filesize(glob('E:\Data Structure/*.*')[1])/1024 ."<br>";
echo "size in megabyte : " .filesize(glob('E:\Data Structure/*.*')[1])/1024/1024;
*/


/* ass3**********

//mkdir("Programming/ PHP",0700,true);

function deleteDirectory($dir) {
  if (!file_exists($dir)) {
      return "Directory Programming Removed";
  }

  if (!is_dir($dir)) {
      return unlink($dir);
  } 

  foreach (scandir($dir) as $item) {

      if ($item == '.' || $item == '..') {
          continue;
      }

      if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
          return false;
      }

  }
  rmdir($dir); 
  return "Directory Programming/PHP Removed" ;
}

echo deleteDirectory('Programming');
*/



/* ass4*************
function change_permissions($file_name)
{
    if(!is_file($file_name) && is_dir($file_name))
    {
          return "This Is Directory And Only Files Allowed";
    }

     if(pathinfo($file_name,PATHINFO_EXTENSION) != 'txt')
      {
        return "File Extension Is Not Txt";
      }  
      
        chmod($file_name,0700);
        return "Permissions Changed";
}

echo change_permissions("Elzero") . "<br>" ; // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"). "<br>" ; // File Extension Is Not Txt
echo change_permissions("Result.txt"). "<br>" ; // Permissions Changed

*/


/* ass5*********

  echo basename(__FILE__) . "<br>";
  echo pathinfo('index' ,PATHINFO_FILENAME). "." .pathinfo('index.php' ,PATHINFO_EXTENSION) . "<br>";
  echo glob("*.php")[0] . "<br>";
 
*/


/* ass6
$handel =  fopen('elzero.txt', 'r');

echo fread($handel ,25) . "<br>";

rewind($handel);

echo fgets($handel) . fgets($handel) . "<br>";

rewind($handel);

echo file('elzero.txt')[0] . file(('elzero.txt'))[1];

fclose($handel);
*/




/* ass7***

//way
$handel = fopen('elzero.txt','r+');
$content = fgets($handel);

$repl = str_replace('osama', 'elzero', $content);

rewind($handel);

fwrite($handel,$repl);
rewind($handel);
echo fgets($handel);  

//////////////////way

/*
$content = file_get_contents('elzero.txt'); 
// Replace "John Doe" with "Jeanne Doe"
$contentReplace = str_replace('osama', 'elzero', $content);
// Open the file in writing mode
$file = fopen('elzero.txt', 'r+');
// Replace the content of the `test.txt` by the new content generated
fwrite($file, $contentReplace);

rewind($file);

echo fgets($file);  


*/


                                      /*date functions */


 
/*ASS1
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get(). "<br>";

$d = date_create();

echo date_format($d,"D, d M y - h:i:s A") . "<br>";

echo date_format($d,"l, d F Y - h:i:s A") . "<br>";

*/




/*ass2
$date = "2005-10-02";

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";
 $x = date_create($date);

echo date_format($x , "l, d F Y - h:i:s A ") . "<br>";
date_modify($x ,  "+15 hours + 15 min +10 seconds");
echo date_format($x , "Y, F, l 'dS' - G:i:s ");
*/



/* ass3
$date = "1990-10-01";

date_default_timezone_set("Africa/Cairo");

$x = explode('-',$date);

$y =  date_create();

$z =  date_format($y , 'Y-m-d');

$f = explode('-',$z);

echo round($x[0] - ($f[0] -(time()/60/60/24/365)) , 1) . "<br>";
echo round($x[2] - ($f[2] -(time()/60/60/24)) , 1);

*/


/*ass4
$date = "1990-10-01";

date_default_timezone_set("Africa/Cairo");

$datee = date_create($date);

 $year = time()/60/60/24/365;
 $day = time()/60/60/24;
 time()/60/60/24;
  

echo $x;


echo date_diff($x , $datee);
*/



                                            /*Sessions & Cookies */


/* ass1*******
 setcookie("site[layout]","boxed",strtotime("+1 month +5 days"));                                           
 setcookie("site[font]","swat",strtotime("+1 month +5 days"));                                           
 setcookie("site[color]","blue",strtotime("+1 month +5 days"));                                           


 echo "<pre>";
 echo print_r($_COOKIE);
 echo "<pre>";
*/


/* ass2 *************
setcookie("site[layout]","boxed",strtotime("+1 month +5 days"));                                           
 setcookie("site[font]","swat",strtotime("+1 month +5 days"));                                           
 setcookie("site[color]","blue",strtotime("+1 month +5 days"));                                           


 echo "<pre>";
 echo print_r($_COOKIE);
 echo "</pre>";

 if (isset($_COOKIE["site"])) {
  echo "Your Color Is " .  $_COOKIE["site"]["color"] . " And Your Font Is " . $_COOKIE["site"]["font"] ;
}

*/


/* ass3*******
setcookie("site[layout]","boxed",strtotime("-1 second"));                                           
 setcookie("site[font]","swat",strtotime("+1 month +5 days"));                                           
 setcookie("site[color]","blue",strtotime("+1 month +5 days"));                                           


 echo "<pre>";
 echo print_r($_COOKIE);
 echo "</pre>";

 if (isset($_COOKIE["site"])) {
  echo "Your Color Is " .  $_COOKIE["site"]["color"] . " And Your Font Is " . $_COOKIE["site"]["font"] ;
}

*/

/* ass4*
setcookie("site[layout]","boxed");                                           
setcookie("site[font]","swat");                                           
setcookie("site[color]","blue",strtotime("+1 month +5 days"));                                           


echo "<pre>";
echo print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["site"])) {
 echo "Your Font Is " . $_COOKIE["site"]["font"] ;
}

*/




                                      /*GLOBALS*/

/*
function k ()
{

$GLOBALS['name'] = 'ezz';

}

k();
echo $name;


?>

<a href= "<?php echo $_SERVER['PHP_SELF']; ?>" >CLICK </a>
"<br>"
<a href="https://www.w3schools.com">Visit W3Schools</a>
*/