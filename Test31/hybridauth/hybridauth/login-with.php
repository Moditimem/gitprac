<?php
		
        session_start();
		$check=true;
        include('config.php');
        include('hybridauth/Hybrid/Auth.php');
        if(isset($_GET['provider']))
        {
        	$provider = $_GET['provider'];
			
        	
        	try{
        	echo "<b> <font face=verdana>Loading please wait.....</font></b> :</br></br> ";
        	$hybridauth = new Hybrid_Auth( $config );
        	
        	$authProvider = $hybridauth->authenticate($provider);

	        $user_profile = $authProvider->getUserProfile();
			
			
	        
			if($user_profile && isset($user_profile->identifier))
	        {
				$check=true;
	        	echo "<b><font face=verdana> Welcome to Blue Sky Mobile Site </b> :".$user_profile->firstName."<br>";
				/*
	        	echo "<b>Surname :</b> :".$user_profile->lastName."<br>";
	        	echo "<b>Language :</b> :".$user_profile->language."<br> ";*/
	        	echo "<img src='".$user_profile->photoURL."'/><br>";
				/*
				echo "<b>About me:</b>".$user_profile->description."<br>";
	        	echo "<b>and this is your email address :</b> :".$user_profile->email."<br>";	        		        		        	
	        	echo "<br> <a href='logout.php'>Logout</a>"; */
?>
				
			<script type="text/javascript">
			window.location.href = "http://192.168.9.206/Test30/index.html#page"
			alert("Your Authentication was successfull");
			</script> 
<?php 			
				//var name=$user_profile->email;
				$_SESSION['varname']=$user_profile->email;
				
			
				
				
				
				
	        }
			else
			{
			
			$check=false;
			}
			
			}
			catch( Exception $e )
			{ 
			
			
				 switch( $e->getCode() )
				 {
								
                        case 0 : echo "Unspecified error."; break;
                        case 1 : echo "Hybridauth configuration error."; break;
                        case 2 : echo "Provider not properly configured."; break;
                        case 3 : echo "Unknown or disabled provider."; break;
                        case 4 : echo "Missing provider application credentials."; break;
                        case 5 : echo "Authentication failed. "
                                         . "The user has canceled the authentication or the provider refused the connection.";
                                 break;
                        case 6 : echo "User profile request failed. Most likely the user is not connected "
                                         . "to the provider and he should to authenticate again.";
                                 $twitter->logout();
                                 break;
                        case 7 : echo "User not connected to the provider.";
                                 $twitter->logout();
                                 break;
                        case 8 : echo "Provider does not support this feature."; break;
                }
				
                // well, basically your should not display this to the end user, just give him a hint and move on..
                echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();

                echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>";

			}
        
        }
		
?>
<!--<script type="text/javascript">
window.location.href = "http://192.168.9.206/Test23/index.html#page"
alert("Your Authentication was successfull");
</script> -->

