<?php
header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 

 class Silo_Repository
 {
 public function InsertSilo($SiloName)
	 
  {    
	 include"connection.php";
	  mysqli_query($conn,"SET NAMES utf8;");
      mysqli_query($conn,"SET CHARACTER_SET utf8;");
	  $sql = "INSERT INTO Silos (Silo_Name) VALUES ('$SiloName')";
	  if($conn->query($sql)===true)
	        {    
		     $sql2="SELECT Silo_ID FROM silos ORDER BY Silo_ID DESC LIMIT 1";             // to return last id insetred 
 		       $result2=$conn->query($sql2);                                             // exxuite query selection
		   	   $rows=mysqli_fetch_array($result2);                                      // acess result coming from data  
	        	$code=$rows['Silo_ID'];
                   
		           echo '<script type="text/javascript">alert("' . $code . '")</script>';
          
                 /* echo '<script language="javascript">';
                       echo 'swal({icon:"success"});';  
		                    echo '</script>'; */
			}  			$conn->close();

	      }
	 
	   //############################################### Update function #########################################3//
	 public function UpdateSilo($SiloId,$siloSName)
	 {
	 include"connection.php";
	  mysqli_query($conn,"SET NAMES utf8;");
      mysqli_query($conn,"SET CHARACTER_SET utf8;");
	 $sql = "UPDATE Silos SET 	Silo_Name='$siloSName' WHERE Silo_ID=$SiloId ";

		 if ($conn->query($sql) === TRUE) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . $conn->error;
				}

				$conn->close();
		}
	  
        //############################################### delete function #########################################3//

	 
	 public function DeleteSilo($SiloID)
	 {
	    include"connection.php";
		 mysqli_query($conn,"SET NAMES UTF8;");
		 mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="DELETE from Silos where Silo_ID='$SiloID'";
		 if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}

			$conn->close();
		 
	 }
	   
   	 //############################################### Read(Select) function #########################################3//
  
  	 public function GetSilo()
	 {
	     
	     include"connection.php";
         mysqli_query($conn,"SET NAMES UTF8;");
		 mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="SELECT * from Silos ";
		 $result = mysqli_query($conn, $sql);
		 $row = mysqli_fetch_array($result);
           return $row;
 					
				 //return $result;		 
 	 }
        
		 
   //############################################ Select One Row function ##############################################//
   	 public function GetSiloID($SiloID)
	 {
	   include"connection.php";
       mysqli_query($conn,"SET NAMES UTF8;");
	   mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="SELECT * from Silos where Silo_ID=$SiloID ";
		 $result = mysqli_query($conn, $sql);
			 if($result->num_rows>0)
			 {
				echo "<table><tr><th>Silo_ID</th><th>Silo_Name</th></tr>";

				while($row = $result->fetch_assoc())
						{
						echo "<tr><td>". $row["Silo_ID"]."</td><td>".$row["Silo_Name"];
						}
						echo "</table>";
				  }
				else 
						   {
							  echo "0 results";
						   } 
		 
	 }
	 }
     $Sfunction= new Silo_Repository();
    $Sfunction->GetSilo( );
      
?>
 