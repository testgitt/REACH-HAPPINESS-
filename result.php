 <?php 
		   $conn= mysql_connect('localhost','root','') or die(mysql error());
		          mysql_select_db('graphs');
				  
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
					else
					{
					  mysql_query("UPDATE charts SET height = '$height' WHERE name = '$name'") or die(mysql_error);
					  
					}
				  }
				    
					
					$fetch = mysql_query(""SELECT *FROM charts") or die(mysql_error());
					echo '<table><tr>';
					while($row = mysql_fetch_array($fetch)
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
					   $output .='<li><img sc="images/bar4.png" height="'.$height1.'"width="18" alt="" /><br/> '.$ratings.'#</li>';
					  }
					  else
					  {
					   $output .='<li><img sc="images/bar1.png" height="'.$height1.'"width="18" alt="" /><br/> '.$ratings.'#</li>';
					  }
					  echo $output;
					  
					}
					echo '</tr></table>';