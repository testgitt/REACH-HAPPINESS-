<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Graph</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/">
	<style type="text/css" id="test">
         div#graph{
		   width: 400px;
		   margin:auto;
		 }
		 li{
		 display: inline-block;
		 list-style:none outside none;
		 margin-right: 12px;
		 font-size: 12px;
		 }
		 li#s{
		     margin: 0px;
			 -moz-transform: rotate(90deg);
			 -webkit-transform: rotate(90deg);
			 
			 margin-top: 20px;
			 font-size:15px;
		  }
		  
		  
		 li#s{
		 margin-left: -8px;
		  }
		  </style>
	</head>
    <body>
     <div id="mainWrapper">
	 <div id="graph">
	    <form method="post" action="index.php">
		<table>
		  <tr>
		    <td>Graph Name:</td>
			<td><select name="name">
			    <option value="">-Select-</option>
				<option value="sales">Sales</option>
				<option value="technical">Technical</option>
				<option value="finance">Finance</option>
			   </select></td>
            </tr>

            <tr>
                <td>Target: </td>
                <td><input type="text" name="target" /></td>
            </tr>
            <tr>
                <td>Achieved: </td>
                <td><input type="text" name="achieved" /></td>
            </txr>
            <tr>
               <td></td>
               <td><input type="submit" name="submit" id="submit" value="Generate" />
            </tr>
            </table>
           </form>
        <br /><br /><br />
		
		
		 
       //<?php include_once 'result.php'; ?>
	   
	   <?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "graph";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		  // $conn= mysql_connect('localhost','root','') or die(mysql error());
		       //   mysql_select_db('graphs');
				  
				  if(isset($_POST['submit']))
				  {
				    $name=$_POST['name'];
					$target = $_POST['target'];
					$achieved = $_POST['achieved'];
					$height= $achieved *100/$target *2;
					
					if(empty($name))
					{
					  echo '<br /><br />Make a valid selection';
					  
					}
					//$sql = "SELECT name, pickup, OrderDate FROM student";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {
 //   echo "<table><tr><th>name</th><th>pickup</th><th>time</th></tr>";
    // output data of each row
 //   while($row = $result->fetch_assoc()) {
         
   //     echo "<tr><td>".$row["name"]." </td><td>".$row["pickup"]."</td><td> ".$row["OrderDate"]."</td></tr>";
        
  //  }
					
					else
					{
					 // mysql_query("UPDATE charts SET height = '$height' WHERE name = '$name'") or die(mysql_error));
					$sql=" UPDATE charts SET height = '$height' WHERE name = '$name'";
					 
					  
					}
				  }
				    
					$sql="SELECT * from charts";
					$result=$conn->query($sql);
					//$fetch = mysql_query("SELECT *FROM charts") or die(mysql_error());
					echo '<table><tr>';
					while($row = $result->fetch_assoc())
					{
					  $name=$rows['name'];
					  $height1= $rows['height'];
					  $ratings= $height1/2;
					  $output= '<td><li id="s">'.$name.'</li></td>';
					  if($name == 'technical')
					  {
					  $output .='<li><img src="images/bar2.png" height="100"width="18" alt=""/><br>'.$ratings.'#</li>';
					  }
					  elseif($name == 'finance')
					  {
					   $output .='<li><img src="images/bar4.png" height="'.$height1.'"width="18" alt="" /><br/> '.$ratings.'#</li>';
					  }
					  else
					  {
					   $output .='<li><img src="images/bar1.png" height="'.$height1.'"width="18" alt="" /><br/> '.$ratings.'#</li>';
					  }
					  echo $output;
					  
					}
					echo '</tr></table>';
					?>
	   </div>
	   </div>
      
     
	 </body>
	 </html>
     	 