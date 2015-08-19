<?php
session_start();
$navigation="Manager's Records Interface";

include 'config2.php';
mysql_connect("$dbhost", "$dbuser", "$dbpass")or die("cannot connect to Server");
mysql_select_db("$dbname")or die("cannot select DB");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
        <head> 
			<meta name="robots" content="noindex, nofollow" />
				<link rel="stylesheet" href="border.css" />
                <title>Statistics</title>
				<link href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" rel="stylesheet" type="text/css"><br>
               <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>-->
				
        </head>
		</br></br></br></br>
			<div><h3 align="center" style="color:FireBrick; font-family:Tahoma" ><strong>User:</strong><?php echo "<strong> " . $_SESSION['name']. " is logged in.</strong></br><br>";echo "Login Date and Time :<strong> " . $_SESSION['time']. "</strong><br><br>";echo "Navigation :<strong> " .$navigation ."</strong><br>"  ?></h3></div>
        <body>
		<div id = "form" style="width:900px;background:white" onmouseover="this.style.background='SteelBlue';" onmouseout="this.style.background='white';">
          <div id = "form1">      
                <h2 align="center" style="color:FireBrick ; font-family:tahoma">Manager's Records Dashboard</h2>
				</br></br>
                 <hr width="80%" color="FireBrick" size="1" >
                <?php
                        // connect to the database
                        include('connect1-db.php');
                        
                        // number of results to show per page
				        $per_page = 10;
				        
				        // figure out the total pages in the database
				        if ($result = $mysqli->query("SELECT * FROM Reporting_Exec_Summary ORDER BY id"))
				        {
				        	if ($result->num_rows != 0)
				        	{
				        		$total_results = $result->num_rows;
				        		// ceil() returns the next highest integer value by rounding up value if necessary
					        	$total_pages = ceil($total_results / $per_page);
					        	
		        				// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
						        if (isset($_GET['page']) && is_numeric($_GET['page']))
						        {
						                $show_page = $_GET['page'];
						                
						                // make sure the $show_page value is valid
						                if ($show_page > 0 && $show_page <= $total_pages)
						                {
						                        $start = ($show_page -1) * $per_page;
						                        $end = $start + $per_page; 
						                }
						                else
						                {
						                        // error - show first set of results
						                        $start = 0;
						                        $end = $per_page; 
						                }               
						        }
						        else
						        {
						                // if page isn't set, show first set of results
						                $start = 0;
						                $end = $per_page; 
						        }
						        
						        // display pagination
						        echo "<p align='left'> Page:</b> ";
						        for ($i = 1; $i <= $total_pages; $i++)
						        {
						        	if (isset($_GET['page']) && $_GET['page'] == $i)
						        	{
						        		echo $i . " ";
						        	}
						        	else
						        	{
						        		echo "<a href='view-paginatedstats.php?page=$i'>$i</a> ";
						        	}
						        }
						        echo "</p>";
						        
						        // display data in table
						        echo "<table border='0' cellpadding='7'  width='900' >";
						         echo "<tr><th><font face='verdana'> Id</font></th> <th><font face='verdana'>Club</font></th>  <th><font face='verdana'>Date</font></th><th><font face='verdana'>Registered by</font></th><th><font face='verdana'>Summary Description</font></th></tr>";
								
						        // loop through results of database query, displaying them in the table 
						        for ($i = $start; $i < $end; $i++)
						        {
						        	// make sure that PHP doesn't try to show results that don't exist
					                if ($i == $total_results) { break; }
					                
						        	// find specific row
						        	$result->data_seek($i);
   	 								$row = $result->fetch_row();
									
										$resulting="SELECT * FROM Remote_Server_Clubs  where ID='$row[1]'"; 
									$result2 = mysql_query($resulting);					
									$row2 = mysql_fetch_array($result2);
									$describe=$row2["Description"];
   	 								
   	 								// echo out the contents of each row into a table
					                echo "<tr>";
					                echo '<td> <font face="Tahoma">' . $row[0] . '</td>';
					                echo '<td> <font face="Tahoma">' . $describe . '</td>';
									echo '<td> <font face="Tahoma">' . $row[2] . '</td>';
									echo '<td> <font face="Tahoma">' . $row[3] . '</td>';
									echo '<td> <font face="Tahoma">' . $row[4] . '</td>';
									echo '<td> <font face="Tahoma">' . $row[5] . '</td>';
									
					                echo "</tr>";
									
									
									
						        }
								

						        // close table>
						        echo "</table>";
				        	}
				        	else
				        	{
				        		echo "No results to display!";
				        	} 
				        }
				        // error with the query
				        else
				        {
				        	echo "Error: " . $mysqli->error;
				        }
                                                
                        // close database connection
                        $mysqli->close();
				
               
                ?>
				  <hr width="80%" color="FireBrick" size="1" >
                </br></br>
				<p align="justify" style="color:black ; font-family:tahoma"><strong> <?php echo 'Total number of summaries registered : ' .$_SESSION['count'] ?></strong></br></br>
				<strong> <?php echo 'Number of active users : ' .$_SESSION['count2'] ?></strong></br></br></p>
				
                <p align="left"><a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="modify.php">All Modification  records</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="users.php">Active Users</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php">Create User's Account</a></</p>
				</div>
				</div>
        </body>
</html>
</html>