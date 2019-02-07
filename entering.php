
	  <?php 

		  
			/*		include"Data_Repository/Item_Repository.php";

							  $CatName         = $_POST['Cat_ID'];i can do post only by name not value 
							  $ItemName        = $_POST['ItemName'];
							  $ItemDiscrptionn = $_POST['ItemDiscrptionn'];
							  $CodeItem        = $_POST[''];  


			   echo "<script> alert ("تم تكويد الصنف بنجاح");</script>";
		 */
     ?>	 
 <!-----------------------------------------------end of Item Code------------------------------------------------> 
	  <?php 

	

            /*   if (!isset($_SESSION)) {
		                        session_start();
		                              } 
  			   if(isset($_POST['submit20']))
 									{  
 					 include"Data_Repository/Category_Repository.php";
 					  $InseCat= new CategoryRepository();
   						  $InseCat->InsertCategory($_POST['CaTTName'],$_POST['CatName']); 
			}*/						
 
      ?>	 
 <!-----------------------------------------------end of Cat Code---------------------------------------------->

     <?php
         /*  if (!isset($_SESSION)) 
		                       {
		                        session_start();
		                          } 
						  if(isset($_POST['submit10']))
 									{  
							  include"Data_Repository/Store_Repository.php";
 							           $STORE= new Store_Repository();
 									   $STORE->InsertStore($_POST['StoreN']); 
									}*/

 
      ?>
 
 <!-----------------------------------------------end of Store Code----------------------------------------------->    
   	 <?php      
            /*   if (!isset($_SESSION)){
		                        session_start();
		                              }
					 if(isset($_POST['submit3']))
						 {  
						    include"Data_Repository/Silos_Repository.php";
 						    $Sfunction= new Silo_Repository();
						    $Sfunction->InsertSilo($_POST['SiloName']); 
						   //  header('Location:entering.php' ) ;
  				          }*/
     ?>
   <!DOCTYPE html>
  <head>
	  
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" /> <!-- تمام السطر دا لازم يتكتب فى بداية صفحه ال HTML-->  
    <title>البرنامج الموحد للمخازن</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
    <!-- Theme style -->
     <link rel="stylesheet" href="dist/css/AdminLTE.css">
	 <link rel='shortcut icon' href='dist/img/logo.jpg'>
     <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
     <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
      <style>
		.modal-header 
		{
			padding:9px 15px;
			border-bottom:1px solid #eee;
			background-color: #0480be;
        }
  	.MYdiv
	{
      width: 600px;
      height: 128px;
      color: #fff;
      background-color: #337ab7;
      margin: auto;
      border-radius: 15px;
      font-size: 20px;
      font-style: bold;
	}
 .ModalForm
		  {
			  margin-bottom: 20px;
			  font-size:20px;
			  background-color:#e4d4e0;
		  }
</style>
     
  </head>
  
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>البرنامج</b>الموحد للمخازن</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>البرنامج </b> الموحد للمخازن </span>
        </a>
       <nav class="navbar navbar-static-top" role="navigation"> <!-- button logout-->
                 <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
          <!-- Navbar Right Menu -->
			   <div class="pull-left">
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
              <img src="dist/img/logo.jpg " class="img-circle" >
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
              <a href="entering.php" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i>  التكويد <i class="fa fa-angle-left pull-right"></i></a>
               <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px;">
                     <li>
					 <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSiloform"  style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								 margin-right:-67px;"> تكويد الصومعه 
                        </a> 
				       </li>
				
				         <li>
					    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalStoreform" style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								 margin-right:-67px;">تكويد المخزن
								</a>
				         </li> 
                          <li>
			          <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalcatForm"         style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								 margin-right:-67px;">تكويد التصنيف
							</a>
				  
				         </li>
                   <li>     
		<div class="text-center">    <!-- Trigger first modal with a button -->
				   <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalitemForm" style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								margin-left:85px;">تكويد الصنف
					</a>
	        	</div>                  <!-- end of Trigger the modal with a button -->
											
                        </li>
               </ul>
            </li>
 			<li class="treeview">
         <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i>  الاستعلام</a>
		<ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px;">
				<li><a href="pages/tables/Custom-data.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن الصنف </a></li>
				<li><a href="pages/tables/QueryStore.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن مخزن </a></li>
				<li><a href="pages/tables/QuerySilo.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن صومعه </a></li>

		 </ul>
      </li>
			  
		<li class="treeview">
              <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i> <span></span> الحركه <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px;">
                <li><a href="pages/forms/GivingOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  اذن صرف </a></li>
		        <li><a href="pages/forms/AddationOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  اذن اضافه </a></li>
			    <li><a href="pages/forms/TransferOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  اذن تحويل </a></li>
               </ul>
         </li>
        <li class="treeview">
              <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i> <span></span> التقارير <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px; ">
                <li><a href="pages/forms/ItemReport.php" style="color: #fff;font-style: bold ;font-size: 20px; " >  تقرير صنف </a></li>
		        <li><a href="pages/forms/StoreReport.php" style="color: #fff;font-style: bold ;font-size: 20px;">  تقرير مخزن </a></li>
			    <li><a href="pages/forms/ContractReport.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  تقرير مستند </a></li>
               </ul>
           </li>
	  </ul>                <!-----------------------------------/.sidebar-menu ------------------------------------>	
	
        </section>  <!-- end section /.sidebar -->
     </aside>
       <!-- Content Wrapper. Contains page content -->
 	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	 <h1> تكويد / ادخال </h1>
	</section>
       <section class="content">
                 <!-- Small boxes (Stat box) -->
                    <div class="row">
						
							
					        <?php  include("enteryItem.php"); ?>
						
           <!-----------------------------end of the first form modal  ------------------>
 
   		                     <?php  include("enteryCat.php"); ?>

           <!-------------------------end of the second form modal  --------------------->
		  
                              <?php  include("enteryStore.php"); ?>

           <!-------------------------end of the third form modal  ---------------------->

                              <?php  include("enterySilo.php");  ?>
	  
           <!-----------------------------end of the last form modal -------------------->
						      <?php include("enteryScreenprdocut.php")?>
                   </div>
		   
			                 
        </section>
  </div>
				  <form>                      <!--_________Button back to home page _______-->
					<input style= "width: 110px;     
								padding: 8PX;
								cursor: pointer;
								box-shadow: 6px 6px 5px;
								#999: ;
								-webkit-box-shadow: 6px 6px 5px #999;
								-moz-box-shadow: 6px 6px 5px #999;
								font-weight: bold;
								background: #367fa9;
								color: #fff;
								border-radius: 10px;
								border: 1px solid #999;
								font-size: 100%;
								position: absolute;
								top:80%;
								LEFt: 1%;"type="button" value='عوده' onclick="window.location.href='starter.php'" />
					 </form>
	  </div>
	  
	<!--_______________________________________Button back to home page ___________________________________-->	

				                               <!-- Main Footer -->
				  <footer class="main-footer">
					<!-- Default to the left -->
							  <strong>     جميع الحقوق محفوظة للشركة المصرية القابضة للصوامع والتخزين  
						 &copy;<a href="https://www.ehcss.com/">https://www.ehcss.com/</a> 2018-2019 .</strong>
				   </footer>
	     <!-----------------------------------------end of footer----------------------->
	  
	 <!-- REQUIRED JS SCRIPTS -->
		 <!-- jQuery 2.1.4 -->
				<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
				<!-- Bootstrap 3.3.4 -->
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<!-- AdminLTE App -->
				<script src="dist/js/app.min.js"></script>
			    <!-- Optionally, you can add Slimscroll and FastClick plugins.
			    Both of these plugins are recommended to enhance the
			    user experience. Slimscroll is required when using the
			    fixed layout. -->
	           <script src="sweetalert.min.js"></script>
 		        <script src="dist/js/OurExternal.js"></script> <!------the external File of java script-->
 
   </body>
</html>
