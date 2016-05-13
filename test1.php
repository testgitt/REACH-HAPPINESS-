 <!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
   <body background="ima.jpg">
    <strong><p><font face="verdana" color="red">


<?php
session_start();


// define variables and set to empty values
$genderErr = "";
$gender = "";
$gend="";
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g="";
$h="";
$i=$j=$k=$l=$m=$n=$o=$p=$q=$r=$s=$t=$u=$v=$x=$y=$z=$ab=$aa=$w=$q=$ac=$ba=$bb=$bc=$bd=$ca=$cb=$cc=$cd=$da=$db=$dc=$dd="";
$total1=$total2=$total3=$total4="";



   
  
     
  

   

   if (empty($_POST["gender"])) {
     $genderErr = "required";
   } else {
     $gender = test_input($_POST["gender"]);
   }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
 1.  Over the last two weeks…
I have had little interest or pleasure in doing the things I usually enjoy
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $globals['a']=4;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $globals['b']=3;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days")$globals['c'] =2;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday")$globals ['d']=1;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
//echo "<h2>Your Input:</h2>";

//echo $gender;
echo "$a+$b+$c+$d"


?>  


 <p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   
2.   Over the last two weeks...
I have had trouble falling or staying asleep, or I have been sleeping too much
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $e=1;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $f=2;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $g=3;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $h=4;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php


?>  

3.   Over the last two weeks...
I have had a poor appetite or have been eating more than usual"
<br>
</br>
   
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $i=1;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $j=2;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $k=3;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $l=4;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php



?>  
4.   
   Over the last two weeks...
I have felt bad about myself or felt like I am a failure or that I have let myself or my family 
<br>
</br>
   
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $m=1;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $n=2;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $o=3;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $p=4;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php



?>  
5.Over the last two weeks...
I have had trouble concentrating on things, like reading the newspaper or watching TV 
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $q=1;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $r=2;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $s=3;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $t=4;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php



?>  
6.Have you found little pleasure or interest in doing things
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $u=1;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $v=2;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $x=3;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $y=4;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php



?>  
7.Over the last two weeks…
I have felt sad or have had little energy.
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $z=4;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $aa=3;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $ab=2;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $ac=1;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php



?>  
8.Over the last two weeks...
I have had trouble concentrating on things, like reading the newspaper or watching TV 
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $ba=1;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $bb=2;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $bc=3;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $bd=4;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php



?>  
9.I do everything very fast these days
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $ca=4;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $cb=3;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $cc=2;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $cd=1;?>  value="nearly everyday">nearly everyday
   
   
 
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php



?>  
10.I am driven with enthusiasm these days
   <br>
   </br>
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Not at all") $da=4;?>  value="Not at all">Not at all
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For several days") $db=3;?>  value="For several days">For several days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="For more than half the days") $dc=2;?>  value="For more than half the days">For more than half the days
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="nearly everyday") $dd=1;?>  value="nearly everyday">nearly everyday
   
   
   

   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php

$total1=$a+$e+$i+$m+$q+$u+$z+$ba+$ca+$da;
$total2=$b+$f+$j+$n+$r+$v+$aa+$bb+$cb+$db;
$total3=$c+$g+$k+$o+$s+$w+$ab+$db+$m+$q;
$total4=$d+$h+$l+$p+$t+$x+$ac+$bd+$cd+$dd;
echo $total1;

$_SESSION['total1'] = $total1;
$_SESSION['total2'] = $total2;
$_SESSION['total3'] = $total3;
$_SESSION['total4'] = $total4;

?>
<?php


if($a+$e+$i+$m+$q+$u+$z+$ba+$ca+$da==22){
	
echo '<a href="http://localhost/startbootstrap-stylish-portfolio/dp/startbootstrap-clean-blog-1.0.3">RESULT</a>';
}
else if($b+$f+$j+$n+$r+$v+$aa+$bb+$cb+$db==24)
{
echo '<a href="http://localhost/startbootstrap-stylish-portfolio/dp/startbootstrap-stylish-portfolio/dp/startbootstrap-clean-blog-1.0.3-Copy">RESULT</a>';
}
else if($c+$g+$k+$o+$s+$w+$ab+$db==24)
{
echo '<a href="http://localhost/startbootstrap-stylish-portfolio/dp/startbootstrap-stylish-portfolio/dp/startbootstrap-clean-blog-1.0.3-Copy(2)">RESULT</a>';
}
else if($d+$h+$l+$p+$t+$x+$ac+$bd+$cd+$dd==28)
{
echo '<a href="http://localhost/startbootstrap-stylish-portfolio/dp/startbootstrap-stylish-portfolio/dp/startbootstrap-clean-blog-1.0.3-Copy(3)">RESULT</a>';
}
else{
echo '	<a href="http://localhost/startbootstrap-stylish-portfolio/dp/startbootstrap-stylish-portfolio/dp/startbootstrap-clean-blog-1.0.3-Copy(4)">RESULT</a>';
}


?> 
</strong> 
</font></p> 
</body>
</html 


