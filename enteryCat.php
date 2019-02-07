
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>26</h3>                   <!--  php هاحط هنا عدد الاصناف اللى متكوده فى الداتا بيز -->
			   <p><strong>تكويد تصنيف</strong></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
			  
			  <!-- ------------------------------------trigger modal--------------------------------------------->
			  
		<div class="text-center">
		  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalcatForm"  style="background-color:rgb(31, 160, 191);
			color: #ededf5;
			width:100%;
			border-top-color: #eee;">عرض
		   </a>
		 </div>   

			 <!------------------------------------------------second modal------------------------------------- ---->  
			  
			  
       <div class="modal fade" id="modalcatForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
		          <!-- Modal Header -->
              <div class="modal-header text-center">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                        </button>
		                     <h4 class="modal-title "> تكويد  تصنيف  جديد </h4>
                                  </div>
      <div class="modal-body mx-3">
		    <div class="md-form mb-5">
 <form  action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data"  method="POST" onSubmit="return validcat();">
              <i class="fas fa-user prefix grey-text"></i>
                  <select class="form-control ModalForm" id="STselect"name="CaTTName"  required>
				         <?php     		// <!--Starting php code -->	

						/*	  include"Data_Repository/Store_Repository.php";
				 			  if(!($_SERVER['REQUEST_METHOD']=='POST'))
							  {
								  ?>
					  
					  <option value="0" >اختار اسم المخزن المضاف اليه </option> 
							
  					        <?php  $Storefuns= new Store_Repository();
                                   $result=$Storefuns->GetStore();
							       $counter=1;
 							  while($row = mysqli_fetch_assoc($result)) 
			            	{ 
					echo "<option value='$counter'>"; // if used double qoutes should put concate before and after vribale
                          echo $row["Store_Name"];        // valrables which return of array 
						        echo  "</option>";
                                       $counter++;								 
		            	    }
							  }
				else {
							     
					 foreach($Datas as $Data)
					 {
                      echo"<option Value="$Data['Store_ID']">";
					  echo $Data['Store_Name'];
					  echo "</option>";
			
				     }
				}
					  
					*/  ?>
		 <!--end  php code -->	
			            </select>
	                <input type="text" name="CatName" id="Scat" class="form-control validate ModalForm" style="margin-top: 25px;" placeholder=" ادخل اسم التصنيف  ">
				  <label data-error="wrong" data-success="right" for="form4"> اسم التصنيف </label>
              </div>
		 
       </div>
             <div class="modal-footer d-flex justify-content-center">
 	                       <input type="submit" name="submit20"  class="btn  btn-primary btn-lg"  value="حفظ";/> 
				                   </form>
                          </div>
                      </div>   <!--end modal--->
                   </div>   <!--end modal doc--->
                 </div>   <!--end modal fade--->
	           </div>   <!--end box small--->
           </div>   <!--end col--->



          