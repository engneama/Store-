<?php



 header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 

  class Store_Repository
 {
	 
 public function InsertStore($storeName)
	 
 {
	 include"connection.php";
	 mysqli_query($conn,"SET NAMES utf8;");
     mysqli_query($conn,"SET CHARACTER_SET utf8;");
	 $sql = "INSERT INTO Stores (Store_Name) VALUES ('$storeName')";
	 if($conn->query($sql)===true)
	      {
		 $sql3=" SELECT Store_ID FROM Stores ORDER BY Store_ID DESC LIMIT 1 ";
		 $result3=$conn->query($sql3);
		 $rows=mysqli_fetch_array($result3);
		 $Sttore=$rows['Store_ID'];
	 echo '<script type="text/javascript">alert("' . $Sttore . '")</script>';
		 // header("Refresh: 4; http://localhost/AdminLTE-RTL-master/entering.php"); 
  	      }				

 }
	   //############################################### Update function #########################################3//
	 public function UpdateStore($StId,$SName)
	 {
	 include"connection.php";
	  mysqli_query($conn,"SET NAMES utf8;");
      mysqli_query($conn,"SET CHARACTER_SET utf8;");
	 $sql = "UPDATE Stores SET 	Store_Name ='$SName' WHERE Store_ID=$StId ";

		 if ($conn->query($sql) === TRUE) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . $conn->error;
				}

				$conn->close();
		}
	  
        //############################################### delete function #########################################3//

	 
	 public function DeleteStore($StoreID)
	 {
	     include"connection.php";
		 mysqli_query($conn,"SET NAMES UTF8;");
		 mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="DELETE from Stores where Store_ID='$StoreID'";
		 if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}

			$conn->close();
		 
	 }
	   
   	 //############################################### Read(Select) function #########################################3//
  
 	 public function GetStore()
	 {
	     include"connection.php";
         mysqli_query($conn,"SET NAMES UTF8;");
		 mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="SELECT * from Stores ";
		 $result = mysqli_query($conn, $sql);
			/* if($result->num_rows>0)
			 {
				echo "<table><tr><th>Store_ID</th><th>Store_Name</th></tr>";

				while($row = $result->fetch_assoc())
						{
						echo "<tr><td>". $row["Store_ID"]."</td><td>".$row["Store_Name"];
						}
						echo "</table>";
				  }
				else 
						   {
							  echo "0 results";
						   } */
				 return $result;
		 
	 }
 
   //############################################ Select One Row function ##############################################//
   	 public function GetStoreID($StorID)
	 {
	   include"connection.php";
       mysqli_query($conn,"SET NAMES UTF8;");
	   mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="SELECT * from Stores where Store_ID=$StorID ";
		 $result = mysqli_query($conn, $sql);
			 if($result->num_rows>0)
			 {
				echo "<table><tr><th>Store_ID</th><th>Store_Name</th></tr>";

				while($row = $result->fetch_assoc())
						{
						echo "<tr><td>". $row["Store_ID"]."</td><td>".$row["Store_Name"];
						}
						echo "</table>";
				  }
				else 
						   {
							  echo "0 results";
						   } 
		 
	 }
	 }
   //  $Storefuns= new Store_Repository();
  //   $$Storefuns->GetStore();
    // $Sfunction->GetStore()("مدفوعات");
?>