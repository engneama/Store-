
 
       <!-- Content Wrapper. Contains page content -->
 	              <div class="col-lg-3 col-xs-6">
                         <!-- small box -->
                             <div class="small-box bg-aqua">
                                   <div class="inner">
                                          <h3>150</h3> <!--  php هاحط هنا عدد الاصناف اللى متكوده فى الداتا بيز -->
                                             <p><strong>تكويد صنف</strong></p>
                                           </div>
                              <div class="icon">
                                  <i class="ion ion-bag"></i>
                                           </div>
		
		<div class="text-center">    <!-- Trigger first modal with a button -->
				   <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalitemForm"  style="background-color:   rgb(31, 160, 191);
					color: #ededf5;
					width:100%;
					border-top-color: #eee;">عرض
					</a>
	        	</div>                  <!-- end of Trigger the modal with a button -->
          
              <!-------------------------------------------starting item Modal----------------------------------- -->
    <div class="modal fade" id="modalitemForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
		 <!-- Modal Header -->
        <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
		      <h4 class="modal-title"> تكويد  صنف  جديد </h4>
       </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
	     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return validation();">               
            <i class="fas fa-user prefix grey-text"></i>
               <select class="form-control ModalForm" id="ourSlect"name="CaTTName">
                  <option value="0"> اختار التصنيف </option>

					<?php
								include"Data_Repository/Category_Repository.php";
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
<input type="text" id="ItemName" name="ItemNamee"class="form-control validate ModalForm" placeholder=" ادخل اسم الصنف ">
			
<input type="text" name="ItemDiscrptionn"id="ItemDiscrption" class="form-control validate ModalForm" placeholder=" ادخل وصف الصنف ">

 <label data-error="wrong" data-success="right" for="form1"> </label>
         </div>
		  
      <div class="modal-footer d-flex justify-content-center">
        <div class="modal-footer">
       <!-- <button  type="submit" name="submit" class="btn  btn-primary btn-lg">  حفظ  </button>-->
			 	  <input type="submit" name="sumbit11" class="btn  btn-primary btn-lg" value="حفظ";/> 
			           </form>
			 </div>
  		                  </div>
                        </div>
                     </div>   <!--end body--->
                   </div>   <!--end modal doc--->
                 </div>   <!--end modal fade--->
	          </div>   <!--end box small--->
           </div> <!--end col--->
                       <!--_________________________________ نهايه  first modal ________________________________________-->
 