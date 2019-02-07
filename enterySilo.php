
<!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>  
				  38  صومعه
				</h3>
              <p> <strong>تكويد صومعه</strong>  </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
			  
     <!---------------------------------------------------   Trigger button modal-------------------------------->

		 <div class="text-center">
					  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSiloform"  style="background-color: rgb(31,    160, 191);
						color: #ededf5;
						width:100%;
						border-top-color: #eee;">عرض
						</a>
		</div>  
     <!----------------------------------   starting Last modal form  -------------------------------------------------->	  
			
			  
         <div class="modal fade" id="modalSiloform" tabindex="-1" role="dialog" aria- labelledby="myModalLabel"
                  aria-hidden="true">
           <div class="modal-dialog" role="document">
                <div class="modal-content">
		            <!-- Modal Header -->
       
                <div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
							  <h4 class="modal-title"> تكويد  صومعه  جديده </h4>
               </div>
                <div class="modal-body mx-3">
   <form action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" onSubmit=" return valSilo();" method="POST">
               <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
  <input type="text" name="SiloName" id="SiloName" class="form-control validate ModalForm" placeholder=" ادخل اسم الصومعه">
            <label data-error="wrong" data-success="right" for="form3">   </label>
                         </div>
                     </div>
                        <div class="modal-footer d-flex justify-content-center">
                                 <input type="submit" name="submit3"  class="btn  btn-primary btn-lg"  value="حفظ";/> 
							</form>
                       </div>
                    </div>   <!--end modal--->
                  </div>   <!--end modal doc--->
                </div>   <!--end modal fade--->
	          </div>   <!--end box small--->
           </div> <!--end col--->
			
			