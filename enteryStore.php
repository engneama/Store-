

  <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>8 مخازن<sup style="font-size: 20px"></sup></h3>

              <p><strong>تكويد مخزن</strong></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
  	 <div class="text-center">
          <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalStoreform"style="background-color:  rgb(31, 160, 191);
           color: #ededf5;
            width:100%;
            border-top-color: #eee;">عرض
         </a>
      </div>
           
			  <!-------------------------------------------- the third Modal starting --------------------------------------------->
			  
			  
	 <div class="modal fade" id="modalStoreform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
     <div class="modal-dialog" role="document">
     <div class="modal-content">
		 <!-- Modal Header -->
       
        <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
		      <h4 class="modal-title"> تكويد  مخزن  جديد </h4>
       </div>
        <div class="modal-body mx-3">
		     <form action="<?php echo $_SERVER['PHP_SELF']?>" method= "post" onSubmit="return validStote();">
				 <div class="md-form mb-5">
						   <i class="fas fa-user prefix grey-text"></i>
						   <input type="text"  name="StoreN" id="STSName" class="form-control validate ModalForm" placeholder=" ادخل اسم المخزن ">
						   <label data-error="wrong" data-success="right" for="form0">  </label>
				</div>
             </div>
			          <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" name="submit10" class="btn  btn-primary btn-lg"  value="حفظ";/> 
                          </form>
			          </div>
                    </div>   <!--end modal--->
                  </div>   <!--end modal doc--->
                </div>   <!--end modal fade--->
	          </div>   <!--end box small--->
           </div> <!--end col--->
   