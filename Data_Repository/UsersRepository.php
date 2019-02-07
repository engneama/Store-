<?php

 header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 

class UsersRepository
{
  public function GetUser()
			  
		  {
		    
			include"connection.php";
		    mysqli_query($conn,"SET NAMES UTF8;");
	        mysqli_query($conn,"SET CHARACTER_SET utf8;");
			$sql="SELECT User_Fname,User_Lname,user_type , password from users";
		    $result = mysqli_query($conn, $sql);
	          return $result;
	        /* if ($result->num_rows >0)
			 {
				  while($row = $result->fetch_assoc())
							{
							   echo    $row["User_Fname"]."  ".$row["User_Lname"]."  ".$row["user_type"].'<br>';
							}
		     }
				else 
						   {
							  echo "0 results";
						   } 
			  
					$conn->close();  */
	    }  
 }
			  
 //	$USER = new UsersRepository();
 //   $USER ->GetUser();



 
?>
 