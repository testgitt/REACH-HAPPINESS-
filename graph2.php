<?php

//Include the code
session_start();


require_once 'phplot.php';
$total1=$_SESSION['total1'];
$total2=$_SESSION['total2'];
$total3=$_SESSION['total3'];
$total4=$_SESSION['total4'];












//Define the object
$plot = new PHPlot();
//Define some data
$example_data = array(
 array('a',"$total1"),
 array('b',"$total2"),
 array('c',"$total3"),
 array('d',"$total4")
);
$plot->SetDataValues($example_data);
//Turn off X axis ticks and labels because they get in the way:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');
//Draw it
$plot->DrawGraph();
session_unset();
session_destroy();
?>