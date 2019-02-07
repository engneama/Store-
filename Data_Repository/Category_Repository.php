<?php



 header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 

 class CategoryRepository
 {
	 
 public function InsertCategory($CategoryName,$StoreID)
	 
  {
	  include"connection.php";
	  mysqli_query($conn,"SET NAMES utf8;");
      mysqli_query($conn,"SET CHARACTER_SET utf8;");
	  $sql = "INSERT INTO Categories (Cat_Name) VALUES ('$CategoryName')";
 	  $RESULT=$conn->query($sql);
	
 	  $sql2="SELECT Cat_ID FROM Categories ORDER BY Cat_ID DESC LIMIT 1";             // to return last id insetred 
	       $result2=$conn->query($sql2);                                             // exxuite query selection
		   $rows=mysqli_fetch_array($result2);                                      // acess result coming from data 
		   $code=$rows['Cat_ID'];
 	      $sql3 = "INSERT INTO store_to_category (Store_ID,Cat_ID) VALUES ('$StoreID','$code')";
          $result3=$conn->query($sql3); 
	      //   var_dump($result3);
        echo '<script type="text/javascript">alert("' . $code . '")</script>';
	            
 }
 
	   
	 //############################################### Update function #########################################3//
	 
	 public function UpdateCategory($CatId,$CName)
	 {
	 include"connection.php";
	  mysqli_query($conn,"SET NAMES utf8;");
      mysqli_query($conn,"SET CHARACTER_SET utf8;");
	 $sql = "UPDATE Categories SET 	Cat_Name ='$CName' WHERE Cat_ID=$CatId ";

		 if ($conn->query($sql) === TRUE) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . $conn->error;
				}

				$conn->close();
		}
	  
        //############################################### delete function #########################################3//

	 
	 public function DeleteCategory($CatID)
	 {
	    include"connection.php";
		 mysqli_query($conn,"SET NAMES UTF8;");
		 mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="DELETE from Categories where Cat_ID='$CatID'";
		 if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}

			$conn->close();
		 
	 }
	   
   	 //############################################### Read(Select) function #########################################3//
   
 	 public function GetCategory()
	 {
	     include"connection.php";
         mysqli_query($conn,"SET NAMES UTF8;");
		 mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="SELECT * from Categories ";
		 $result = mysqli_query($conn, $sql);
 		 return $result;
	 }
 
   //############################################ Select One Row function ##############################################//
   	
	  
	  public function GetCategoryID($CATID)
	   {
	    include"connection.php";
       mysqli_query($conn,"SET NAMES UTF8;");
	   mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="SELECT * from Categories where Cat_ID=$CATID ";
		 $result = mysqli_query($conn, $sql);
			 if($result->num_rows>0)
			 {
				echo "<table><tr><th>Store_ID</th><th>Store_Name</th></tr>";

				while($row = $result->fetch_assoc())
						{
						echo "<tr><td>". $row["Cat_ID"]."</td><td>".$row["Cat_Name"];
						}
						echo "</table>";
				  }
				else 
						   {
							  echo "0 results";
						   } 
		 
	 } 
	 }
     // $Sfunction= new CategoryRepository();
    //  $Sfunction->InsertCategory("مخبوزات", 
							    
?>