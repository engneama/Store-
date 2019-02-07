
<?php
 header('Content-Type: text/html; charset=utf-8');
 //  السطر دا لازم يتكب فى صفحه ال PHP 
  
 class Item_Repository
          {  
	     
				public function GetItem()
			  {

	          include"connection.php";
			  $sql='select * from item';
			  $result = mysqli_query($conn, $sql);
 			   return $result;
		      }
	                 	         //###############################Read one Recored ###########################33

	 
            public function GetItemByID($D) // return one row using bind param 
			  {
	               include"connection.php";
					$stmt = $conn->prepare("SELECT * FROM item WHERE Item_ID =$D");
					$stmt->bind_param("s", $D); 
					$stmt->execute();
					$result = $stmt->get_result();
					$row    = $result->fetch_assoc();
					print_r ($row);
             }
 
  	                              //###############################Insert Recored ###########################33
	
	  public function InsertItem($ItemCode,$CatID,$sItemName,$sItemdescription)
		  {
	            include"connection.php";
 		        mysqli_query($conn,"SET NAMES 'UTF8'");
				mysqli_query($conn,'SET CHARACTER SET UTF8');
				$sql = " INSERT INTO item (Item_Code,Cat_ID,Item_Name,Item_description)
				VALUES ('$ItemCode', '$sItemName', '$sItemdescription')";
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();       
	      }
  
		  // Connection database
     /* First way by form 
        if (isset($_POST['submit']))
              {
				mysqli_query($conn,"SET NAMES 'UTF8'");
				mysqli_query($conn,'SET CHARACTER SET UTF8');
			    $Itemcode          =  $_POST['Itemcode'];
			    $sItemName         =  $_POST['ItemName'];
			    $sItemdescription  =  $_POST['ItemQuantity'];
				 $stmt = $conn->prepare("INSERT INTO  testfun (Item_code,Item_Name,Item_Quantity )VALUES(?,?,?)");  
				 $stmt->bind_param("sss",$Itemcode ,$sItemName , $sItemdescription);
				 $stmt->execute();
				 $stmt->close();
 
       
		       }*/
	 
	 public function DeleteItem($DItem)
		 {
        	 include"connection.php";

			$sql = "DELETE FROM testfun WHERE Item_ID= $DItem";

			if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
			}

			$conn->close();
		}
 
		                         //##########33##################3UPDATE#################################333
		
		  public function UpdateItem( $I,$Q )
		{
	           include"connection.php";

				$sql = "UPDATE testfun SET Item_Quantity ='$I' WHERE Item_ID= $Q ";

				if ($conn->query($sql) === TRUE) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . $conn->error;
				}

				$conn->close();
		}
	  }
          //  $Functions= new Item_Repository();
             //$Functions->DeleteItem(31);
             // $Functions->UpdateItem(10,10);
             // $Functions->GetItem();
             //$Functions->GetItemByID(9);
  //  $Functions->InsertItem (500, 'ورق', 200);
            
?>



 
 
 


	
 	

