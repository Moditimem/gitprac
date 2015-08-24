<?php
session_start();
 $_SESSION["loginTime"] = time();
 
 

$navigation="Summary Interface";


 	
//adding comments to track the changes done.


 
?>


<html>
	<head>


		<meta name="robots" content="noindex, nofollow" />
	
	
		
		<link rel="stylesheet" href="border.css" />
		<title>View Previous Summaries</title>
		<link href="http://code.jquery.com/mobile/git/jquery.mobile-git.css" rel="stylesheet" type="text/css"><br>
			<!--</br><h4 align="center">Standard Lesotho Bank Membership Capture</h4></br>-->
			<!--<h2 align="center"><strong>Standard Lesotho Bank Membership Capture Form</strong></h2></br>-->
			
	</head>
	</br></br></br>
	<div><h3 align="center" style="color:#0B2161; font-family:Tahoma" ><strong>User:</strong><?php echo "<strong> " . $_SESSION['name']. " is logged in.</strong></br><br>";echo "Login Date and Time :<strong> " . $_SESSION['time']. "</strong><br><br>";echo "Navigation :<strong> " .$navigation ."</strong><br>"  ?></h3></div>
	<body >
	 <div id = "form" style="width:900px;background:white" onmouseover="this.style.background='white';" onmouseout="this.style.background='white';">
	
	
	<p align="justify"><img src="PartnerPlusLogo.jpg" alt="Mountain View" style="width:450px;height:100px"></p>
                </br>
				  <hr width="90%" color="#0B2161" size="1" >
				   </br></br>
                <?php
                        // connect to the database
                        include('connect1-db.php');
                        
                        // number of results to show per page
				        $per_page = 10;
				        $user=$_SESSION['name'];
				        // figure out the total pages in the database
				        if ($result = $mysqli->query("SELECT * FROM Telesave.Members  where Load_By='Melissa Pillay'"))
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
						        echo "<p><font face='Tahoma'><b>Page:</b></font> ";
						        for ($i = 1; $i <= $total_pages; $i++)
						        {
						        	if (isset($_GET['page']) && $_GET['page'] == $i)
						        	{
						        		echo $i . " ";
						        	}
						        	else
						        	{
						        		echo "<a href='view-viewingpaginated.php?page=$i'>$i</a> ";
						        	}
						        }
						        echo "</p>";
						        
						        // display data in table
						        echo "<table border='0' cellpadding='7' width='900' >";
						        echo "<tr><th><font face='Tahoma'> Id</font></th> <th><font face='Tahoma'>Member No</font></th>  <th><font face='Tahoma'>Scheme</font></th><th><font face='Tahoma'>First Name</font></th><th><font face='Tahoma'>Surname</font></th><th><font face='Tahoma'>Load Date</font></th><th><font face='Tahoma'>Email</font></th></tr>";
						
						        // loop through results of database query, displaying them in the table 
						        for ($i = $start; $i < $end; $i++)
						        {
						        	// make sure that PHP doesn't try to show results that don't exist
					                if ($i == $total_results) { break; }
					                
						        	// find specific row
						        	$result->data_seek($i);
   	 								$row = $result->fetch_row();
   	 								$clubs=$row[1];
   	 								// echo out the contents of each row into a table
									
									
									
					                echo "<tr>";
					                echo '<td> <font face="Tahoma">' . $row[0] . '</font></td>';
									echo '<td><font face="Tahoma">' . $row[2]. '</font></td>';
									echo '<td><font face="Tahoma">' . $row[3] . '</font></td>';
									echo '<td><font face="Tahoma">' . $row[7] . '</font></td>';
									echo '<td><font face="Tahoma">' . $row[8] . '</font></td>';
									echo '<td><font face="Tahoma">' . $row[13] . '</font></td>';
									echo '<td><font face="Tahoma">' . $row[22] . '</font></td>';
					               
					                echo "</tr>";
									
									
						        }
								

						        // close table>
						        echo "</table>";
				        	}
				        	else
				        	{
				        		echo "No records to display!";
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
				<br>
				  <hr width="90%" color="#0B2161" size="1" >
                </br></br></br>
				<strong><font face='Tahoma'> <?php echo' </p> Total number of '.$_SESSION['count']. " record (s) have been captured"?></font></strong></br></br>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php" style=" font-family:Tahoma">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="capture.php" style=" font-family:Tahoma">Back</a><br><br>
			</div>
			
			</form>
		</body>
			<br><br>
		


</html>

