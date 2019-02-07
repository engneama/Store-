<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>البرنامج الموحد للمخازن</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
 	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
	 <link rel='shortcut icon' href="../../dist/img/logo.jpg">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini"  dir="rtl">
    <div class="wrapper">

      <style>
		  #back
		  {
    position: absolute;
    bottom: 5%;
    right: 25%;
		  
		  }
		 
		</style>
     
		<!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>البرنامج</b>الموحد للمخازن</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>البرنامج </b> الموحد للمخازن </span>
        </a>

       <!-- Header Navbar -->
                  <nav class="navbar navbar-static-top" role="navigation"> 
                 <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
          <!-- Navbar Right Menu -->
			   <div class="pull-left">  <!-- button logout-->
                      <a href="pages/examples/Loginpage.php" class="btn btn-primary btn-flat" style="margin:10px 20px ;font-style:bold;font-size:18px;outline:none;">خروج</a>
                    </div>
                   </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
         <!-- Sidebar user panel (optional) -->
             <div class="user-panel">
            <div class="pull-right image">
              <img src="../../dist/img/logo.jpg " class="img-circle" >
            </div>
            <div class="pull-left info">
              <!-- Status -->
             <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
				 <div style="color:#fff;margin-top:10px;"><h4 align='left'><?php echo 'مرحبا'." ".$_SESSION['USERNAME'];?></h4></div>
            </div>
          </div>
		
		
		
		
                      <!--######################################################################################-->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header" style="color: #fff;font-style: bold ;font-size: 30px;">المحتويات </li>
            <!-- Optionally, you can add icons to the links -->
             <li class="treeview">
              <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i>  التكويد <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px;">
				  
			   <li><a href="../../entering.php" style="color: #fff;font-style: bold ;font-size: 20px;"> تكويد الصومعه</a></li> 
               <li><a href="../../entering.php" style="color: #fff;font-style: bold ;font-size: 20px;"> تكويد المخزن</a></li>
               <li><a href="../../entering.php" style="color: #fff;font-style: bold ;font-size: 20px;" >تكويد التصنف </a></li>
               <li><a href="../../entering.php" style="color: #fff;font-style: bold ;font-size: 20px;" >تكويد الصنف </a></li>
               </ul>
            </li>
			  
			<li class="treeview">
             <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i>  الاستعلام</a>
                <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px;">
				   <li><a href="../tables/Custom-data.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن الصنف </a></li>
				   <li><a href="../tables/QueryStore.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن مخزن </a></li>
				   <li><a href="../tables/QuerySilo.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن صومعه </a></li>
 			   </ul>
            </li>
			  
			  <li class="treeview">
              <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i> <span></span> الحركه <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px;">
                <li><a href="GivingOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;">  اذن صرف </a></li>
		        <li><a href="AddationOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;">  اذن اضافه </a></li>
			    <li><a href="TransferOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;">  اذن تحويل </a></li>
               </ul>
            </li>
			  
			  
			  <li class="treeview">
              <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i>  التقارير</a>
              <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px; ">
                <li><a href="ItemReport.php" style="color: #fff;font-style: bold ;font-size: 20px; " >  تقرير صنف </a></li>
		        <li><a href="StoreReport.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  تقرير مخزن </a></li>
			    <li><a href="ContractReport.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  تقرير مستند </a></li>
               </ul>
            </li>
	  </ul>                       	
        </section>
      </aside>     <!-- /.sidebar-menu -->	
 
        <!-- Main content -->

	 <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
				  <h1> اذن اضافه </h1>     
		 </section>
 		  <!-- Main content -->
		<section class="content">
			<!-- SELECT2 EXAMPLE -->
		  <div class="box box-default">
			<div class="box-header with-border">
			  <h3 class="box-title">اذن اضافه</h3>
			   <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			   </div>
			</div>
        <!-- /.box-header -->
		  
        <div class="box-body">
			<div class="alert alert-danger alert-dismissible  hidden" id="Myalram">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i>  تنبيه </h4>
              </div>
	  <form action="#" method="POST" onsubmit="return AddaOrderValid();"> <!--the starting of form-->
           <div class="row">
             <div class="col-md-4">
                  <div class="form-group">
                    <label>نوع الاذن</label>
                    <select class="form-control" style="width: 100%;"  class="required" id="SelectDocType">
                      <option selected="selected" value="0">اختار نوع الاذن</option>
                       <option>اذن اضافه</option>
                      <option>اذن صرف</option>
					 <option>اذن تحويل</option>
                    </select>
                  </div>
 				  </div><!-- /.form-group -->
			  <div class="col-md-4">
                  <div class="form-group">
                    <label>رقم الاذن</label>
                <input type="text" class="form-control" placeholder="ادخل رقم الاذن"  id="SelectDocNum">
                   </div>
 				  </div><!-- /.form-group -->
			  <div class="col-md-4">
                  <div class="form-group">
                    <label>   التاريخ :</label>
 					    <div class='input-group date' id='datepicker'required>
		                    <span class="input-group-addon">
 		             <span class="glyphicon glyphicon-calendar"> <i class="fas fa-calendar-alt"></i></span>
 		                    </span>
	 <input type='text' class="form-control" id='datepickerinput' name="datepicker" placeholder="ادخل التاريخ" id="SelectDate">

		                </div>
                    </div>
 			  </div><!-- /.form-group -->
           </div>    <!-- /.row -->
   		 <div class="row">
			 <div class="col-md-4">
                  <div class="form-group">
                    <label> التصنيف</label>
                    <select class="form-control" style="width: 100%;" id="SelectCat">
                      <option selected="selected" value="0">اختار التصنيف  </option>
                       <option>اذن اضافه</option>
                      <option>اذن صرف</option>
					 <option>اذن تحويل</option>
                    </select>
                  </div>
				  </div><!-- /.form-group -->
 				  <div class="col-md-4">
                    <div class="form-group">
                    <label> الصنف</label>
                    <select class="form-control" style="width: 100%;" id="SelectItem">
                      <option selected="selected" value="0">اختارالصنف</option>
                       <option>اذن اضافه</option>
                      <option>اذن صرف</option>
					 <option>اذن تحويل</option>
                    </select>
                  </div>
                  </div><!-- /.col -->
                     <!-- text input -->
					  <div class="col-md-4">
                     <div class="form-group">
                      <label> اول المده </label>
                      <input type="text" class="form-control  " placeholder="رصيد اول المده" id="Selecttime">
                    </div>
				  </div>
             <!-- /.col -->
           </div>
				 <div class="row">
					 <!-- text input -->
					  <div class="col-md-4">
                     <div class="form-group">
                      <label>الصادر من الصنف</label>
                      <input type="text" class="form-control"  placeholder="   الكميه الصادر منها" id="SelectAmount">
                    </div>
				  </div>
				   <!-- text input -->
					  <div class="col-md-4">
                     <div class="form-group">
                      <label>  الجهه الوارد منها    </label>
                      <input type="text" class="form-control"   placeholder="ادخل الجهه الوارد منها"   id="Selectplace">
                    </div>
				  </div>
				 <div class="col-md-4">
                    <div class="form-group">
                    <label> المخزن</label>
 			<select class="form-control" name="Store" id="SelectStore">
                       <option selected="selected" VALUE="0">اختار اسم المخزن</option>
                       <option>اذن اضافه</option>
                       <option>اذن صرف</option>
					   <option>اذن تحويل</option>
                    </select>
                  </div>
                  </div><!-- /.col -->
			   </div>
			 <div class="row">
		<div class="col-md-12">
                     <div class="form-group">
                      <label>الملاحظات عن الاذن</label>
                      <textarea class="form-control"  rows="2" placeholder="ادخل اى ملاحظات" id="SelectArea"></textarea>
                     </div>
				  </div>
			</div>
		  <div class="col-xs-12">
                   <input type="submit" style="margin:10px" class="btn  btn-primary btn-md"  value="حفظ الاذن";/> 
		 	    </form>
		     </div>	
          </div> <!-- /.col (right) -->
       </div>
  		  <div class="row"> <!--the start of button saving page -->
			    <div class="col-xs-12">
		            <form>
					 <input type="button"  style= "width: 110px;
								padding: 8PX;
								cursor: pointer;
								box-shadow: 6px 6px 5px;
								#999: ;
								-webkit-box-shadow: 6px 6px 5px #999;
								-moz-box-shadow: 6px 6px 5px #999;
								font-weight: bold;
								background: #f59907;
								color: #fff;
								border-radius: 10px;
								border: 1px solid #999;
								font-size: 100%;
								position: absolute;
								top:-3000%; 
								LEFt:1%;" value='عوده' onclick="window.location.href='../../movements.php'" />
			            </form> 
		             </div>
                </div>
	       </section>  <!-- /.content -->
		</div>  <!-- /.content-wrapper -->  
 
             <!--------------------------------------------Footer--------------------------------------------------->
   
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>     جميع الحقوق محفوظة للشركة المصرية القابضة للصوامع والتخزين  
        &copy;<a href="https://www.ehcss.com/">https://www.ehcss.com/</a> 2018-2019 .</strong> 
      </footer>   
                <!---------------------------------- end footer ----------------------------------------->
    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page script -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
 	 
<script src="../../dist/js/AddtonanlOrder.js"></script>    <!------the external File of java script-->

     
	  </div>

  </body>
</html>