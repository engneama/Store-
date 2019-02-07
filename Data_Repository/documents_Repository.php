<?php



 header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 

 class DocumentsRepository
 {
	 
 public function InsertDocument ($DocDate ,$DocNumber,$DocCode ,
								 $Doctype ,$DocStatement,$DocClassName,
								 $DocFirst,$StoreID ,$DrainageArea,
								 $Outgoing,$Notes )
	 
  {
	  include"connection.php";
	  mysqli_query($conn,"SET NAMES utf8;");
      mysqli_query($conn,"SET CHARACTER_SET utf8;");
	  $sql = "INSERT INTO   documents (Doc_Date,Doc_Number,Doc_Code,Doc_type,Doc_Statement,Doc_Class_name,Doc_First,Store_ID,Drainage_area,Outgoing,Notes) VALUES ('$DocDate','$DocNumber','$DocCode','$Doctype','$DocStatement','$DocClassName',$DocFirst,'$StoreID','$DrainageArea','$Outgoing,'$Notes')";
	  if($conn->query($sql)===true)
	      {  
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();       
 }
	   
	 //############################################### Update function #########################################3//
	 
  public function UpdateDocument($DocID)
	 
	 {
	   include"connection.php";
	   mysqli_query($conn,"SET NAMES utf8;");
       mysqli_query($conn,"SET CHARACTER_SET utf8;");
	   $sql = "UPDATE documents SET 	Doc_ID ='$CName' WHERE Doc_ID=$DocID ";

		 if ($conn->query($sql) === TRUE) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . $conn->error;
				}

				$conn->close();
		  }
	  
        //############################################### delete function #########################################3//

	 
	  public function deleteDocument($DocID)
	 {
			 include"connection.php";
			 mysqli_query($conn,"SET NAMES UTF8;");
			 mysqli_query($conn,"SET CHARACTER_SET utf8;");
			 $sql="DELETE from documents where Doc_ID='$DocID'";
			 if ($conn->query($sql) === TRUE) {
					echo "Record deleted successfully";
			 } else {
					echo "Error deleting record: " . $conn->error;
			 }

			$conn->close();
		 
	 }
	   
   	 //############################################### Read(Select) function #########################################3//
   
   public function getDocuments()
	 {
			 include"connection.php";
			 mysqli_query($conn,"SET NAMES UTF8;");
			 mysqli_query($conn,"SET CHARACTER_SET utf8;");
			 $sql="SELECT * from documents ";
			 $result = mysqli_query($conn, $sql);
			 return $result;
		 
	 }
 
         //############################################ Select One Row function ##############################################//
   	
	  
  public function getDocumentId($DocID)
	   {
	     include"connection.php";
         mysqli_query($conn,"SET NAMES UTF8;");
	     mysqli_query($conn,"SET CHARACTER_SET utf8;");
		 $sql="SELECT * from documents where Doc_ID=$DocID";
		 $result = mysqli_query($conn, $sql);
			 echo "<table><tr><th>Doc_ID</th><th>Doc_Date</th><th>Doc_type</th><th>Doc_Statement</th></tr>";

				while($row = $result->fetch_assoc())
						{
						echo "<tr><td>". $row["Doc_ID"]."</td><td>".$row["Doc_Date"]."</td><td>".$row["Doc_type"]."</td><td>".$row["Doc_Statement"]."</td><td>";
						}
						echo "</table>";else {return 0;}
  }
	 
  }
	  
  
 
	  
     $function= new DocumentsRepository();
  // $Sfunction->InsertDocument (20/10/2008 ,250,12530 ,"تحويل" ,'ادوات كتابيه', "ورقق", 500,2 ,"الجمهوريه", 200, "اقلام" )
     $function->getDocumentId(3);
?>