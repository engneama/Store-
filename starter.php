<?php
header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 
 
?>
<!--###################################################################################-->

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
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
     
  </head>
 
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="starter.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>البرنامج</b>الموحد للمخازن</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>البرنامج </b> الموحد للمخازن </span>
        </a>
         <!-- Header Navbar -->
		   <?php
		session_start();
       
	include('Data_Repository/connection.php');
	
	 
       ?>
        <nav class="navbar navbar-static-top" role="navigation">
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
					 <a href="entering.php"  style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								"> تكويد الصومعه 
                        </a> 
				       </li>
				
				         <li>
					       <a href="entering.php"  style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								">تكويد المخزن
								</a>
				         </li> 
                          <li>
			            	<a href="entering.php"  style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								">تكويد التصنيف
							</a>
				  
				         </li>
                         <li>
 						  <a href="entering.php"  style="background-color: #2c3b41;
								border-color: transparent;
								color: #fff;
								font-style: bold;
								font-size:22px;
								">تكويد الصنف
							</a>
											
                        </li>
               
              </ul>
            </li>
			  
			  
			<li class="treeview">
              <a href="queries.php" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i>  الاستعلام</a>
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
		        <li><a href="pages/forms/StoreReport.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  تقرير مخزن </a></li>
			    <li><a href="pages/forms/ContractReport.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  تقرير مستند </a></li>
               </ul>
            </li>
	  </ul>                          <!-- /.sidebar-menu -->	
	
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
            <section class="content-header">
        </section>

        <!-- ################# Main content #####################-->

        
        <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>التكويد / الادخال</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="entering.php" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> انتقال </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
              <p>الاستعلام</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="queries.php" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> انتقال   </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>الحركات</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="movements.php" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> انتقال </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>التقارير </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="reports.php" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> انتقال  </a>          </div>
             </div>
        <!-- ./col -->
      </div>
      <!-- /.row --> 

        </section> <!--########################/.content ####################### -->
		  
		  
      </div><!-- /.content-wrapper --
		
		
      <!-- Main Footer -->
      <footer class="main-footer">
    

        <!-- Default to the left -->
 <strong>     جميع الحقوق محفوظة للشركة المصرية القابضة للصوامع والتخزين  
        &copy;   <a href="https://www.ehcss.com/">https://www.ehcss.com/</a> 2018-2019      .</strong>      </footer>
*
    <!-- REQUIRED JS SCRIPTS -->	
	<script src="dist/js/pages/custom.js"></script>

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
  </body>
</html>
