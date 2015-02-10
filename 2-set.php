<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>2nd exercises</title>
</head>
<body>
 <h2>Converting Seconds to Years</h2>

<h2>Time Traveling</h2>
<?php
$years = [1823, 1995, 3043];

/** Test if a year is from the past, present, or future */
function test_year($year)
{
  $message = " ";
 switch($year){
  case (<= 1900):
   $message = "$year was a long time ago--welcome to now."
      break;
  case( <= 2015):
    $message =  "Welcome! Just so you know, don't use Internet Explorer. Ever."
      break;
  case( > 2015):
   $message = "Welcome! What is your favorite toy from the future?"
     break;
  } 
 return  $message;
}

?>

<h2>Multiply 2 Numbers</h2>
<?php
function multiply($x, $y){
  return $x * $y;
}
echo multiply(4, 2)

?>

<h2>Division, Multiplication's Shady Cousin</h2>
<?php
  function divide($x, $y){
    if( $y == 0 ){
      return $y/$x;
    }
    else{ 
      return $x / $y;
    }
  }
echo divide(4, 2)
?>

</body>
</html>
