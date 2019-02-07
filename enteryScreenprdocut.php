
<!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>  
ادخال				</h3>
              <p> <strong> ادخال الارصده</strong>  </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
			  
     <!---------------------------------------------------   Trigger button modal-------------------------------->

		 <div class="text-center">
					  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalcharge"  style="background-color: rgb(31, 160, 191);
						color: #ededf5;
						width:100%;
						border-top-color: #eee;">عرض
						</a>
		</div>  
     <!----------------------------------   starting Last modal form  -------------------------------------------------->	  
			
			  
         <div class="modal fade" id="modalcharge" tabindex="-1" role="dialog" aria- labelledby="myModalLabel"
                  aria-hidden="true">
           <div class="modal-dialog" role="document">
                <div class="modal-content">
		            <!-- Modal Header -->
                <div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
							  <h4 class="modal-title">ادخال الرصيد الافتتاحى </h4>
               </div>
                <div class="modal-body mx-3">
   <form action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" onSubmit=" return();" method="POST">
	   
               <div class="md-form mb-5"> <!-- starting fileds form-->
                    <i class="fas fa-user prefix grey-text"></i>
	 
  <select class="form-control ModalForm" id="ItemSle"name="Iteme" required>  <!-- Select Item -->
				           <option value="0">اختار الصنف </option> 
 		 <!--Starting php code -->	
							 <?php 
							  include"Data_Repository/Item_Repository.php";
                                   $Iten= new Item_Repository();
                                   $result=$Iten->GetItem();
							       $counter=1;
 							  while($row = mysqli_fetch_assoc($result)) 
			            	{ 
					echo "<option value='$counter'>"; // if used double qoutes should put concate before and after vribale
                          echo $row["Item_Name"];        // valrables which return of array 
						        echo  "</option>";
                                       $counter++;								 
		            	    } 
							       ?>
		 <!--end  php code -->	
			            </select>
				   
				   
 <input type="text" name="Amount"  id="FAmonut" class="form-control  validate ModalForm" placeholder="ادخل رصيد اول المده من الصنف">
				   
 <input type="date" name="Date" id="DAmount" class="form-control validate ModalForm" placeholder="ادخل تاريخ اول المده">
				   
 <input type="text" name="Discpit" id="discript" class="form-control validate ModalForm" placeholder="وصف الصنف">

		
		<select class="form-control ModalForm" id="CName"name="CName">   <!-- Select Cat -->
                  <option value="0"> اختار التصنيف </option>

					<?php
			
					   $CatRpo=new CategoryRepository();
					   $result= $CatRpo->GetCategory();
					   $counter=1;

						while($row = mysqli_fetch_assoc($result)) 
							{
								  echo "<option value=".$counter.">";
								  echo $row["Cat_Name"];
								  echo "</option>";
								  $counter++;
							} 
			
								?> 
                    </select>

		 
   <select class="form-control ModalForm" id="STselect"name="SStName" required>  <!-- Select Store -->
				           <option value="0">اختار اسم المخزن المضاف اليه </option> 
 		 <!--Starting php code -->	
							 <?php 
							       $Storefuns= new Store_Repository();
                                   $result=$Storefuns->GetStore();
							       $counter=1;
 							  while($row =mysqli_fetch_assoc($result)) 
			            	{ 
					echo "<option value='$counter'>"; // if used double qoutes should put concate before and after vribale
                          echo $row["Store_Name"];        // valrables which return of array 
						        echo  "</option>";
                                       $counter++;								 
		            	    } 
							       ?>
		 <!--end  php code -->	
			            </select>
  				   				   
       <select class="form-control ModalForm" id="SiloNAME"name="SiloNAME"  required>  <!-- Select Silo -->
				           <option value="0">اختار اسم الصومعه المضاف اليها </option> 
 		    <!--Starting php code -->	
							 <?php 
 						/*	 $funs= new Silo_Repository();
                                $row['Silo_Name']=$funs->GetSilo();
							     $counter=1;
 							  while($row =mysqli_fetch_assoc($row['Silo_Name'])) 
			            	{ 
					echo "<option value='$counter'>"; // if used double qoutes should put concate before and after vribale
                          echo $row['Silo_Name'];        // valrables which return of array 
						        echo  "</option>";
                                       $counter++;								 
		            	     } */ 
							       ?>
		      <!--end  php code -->	
			            </select>
                               <label data-error="wrong" data-success="right" for="form3">   </label>
                         </div> <!-- starting fileds form-->
	   
                     </div>
                        <div class="modal-footer d-flex justify-content-center">
                                 <input type="submit" name="submit99"  class="btn  btn-primary btn-lg"  value="حفظ";/> 
							</form>
                       </div>
                    </div>   <!--end modal--->
                  </div>   <!--end modal doc--->
                </div>   <!--end modal fade--->
	          </div>   <!--end box small--->
           </div> <!--end col--->
			
