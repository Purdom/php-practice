<html>
<head>
<title>PHP Homework, Exercise 1</title>
</head>

<body>
<h1>PHP Practice</h1>

<?php 
$a = array(
  "name"=>"Purdom Lindblad",
  "street"=>"415 Alderman Library", 
  "city"=>"Charlottesville",
  "state"=>"Virginia",
);
?>
<!--the first call ensures the correct order-->
<h2>My Address:</h2>
  <p><?php echo $a["name"]?><br/>
     <?php echo $a["street"]?><br/>
     <?php echo $a["city"]?><br/>
     <?php echo $a["state"]?><br/>
  </p>
<!--this way depends on having the array in the order I want it displayed-->
 <p> <?php echo implode($a, " . ");?></p>

<h2>Authors and Death Dates</h2>
<!--using foreach requires the two arrays are in the correct order for authors and their respective death dates. This is workable for a small data set, but open to a great deal of error if one or both arrays get out of sync.-->
<?php
$au = array("Charles Dickens", "William Thackeray", "Anthony Trollope", "Gerarad Manley Hopkins");
$dd = array("1870", "1863", "1882", "1889");

foreach ($au as $key=>$name){
  echo $name." died in ".$dd[$key].". <br/>";
}
?>

<h2>PHP and links</h2>
<?php
$au = array(
  'Wayne tries Acro' => 'https://40.media.tumblr.com/a60a0c5e49f6059b2b4e5a739040970f/tumblr_nd7duuhiqx1smh61so1_500.jpg',
  'Current level' => 'http://www.gannett-cdn.com/-mm-/dfef4f922c583856fa371d04b3334d12bd5d856d/r=x383&c=540x380/local/-/media/USATODAY/USATODAY/2013/08/04/1375653099000-GAN-ACRO-YOGA-080413-2-1308041754_4_3.jpg',
  'Goal' => 'https://lauralovesit.files.wordpress.com/2012/03/acroyoga.jpg',
  'Plan B' => 'http://darioayalaphoto.com/wordpress/wp-content/uploads/2014/05/DEA14-0430-Kurios2-1831_1.jpg',
);

foreach($au as $name => $path){
  echo "<li><a href=\"$path\">$name</a></li>";
}
?>

<h2>Variables and URLs</h2>
<?php
$name = $_GET['site'];
$path = $au[$name];
echo "<li><a href=\"$path\">$name</a></li>";
?>
 </body>
</html>


