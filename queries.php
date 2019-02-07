<?php
  session_start();
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
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
	 <link rel='shortcut icon' href='dist/img/logo.jpg'>

    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
 
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

        <!-- Header Navbar -->
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
			  <h1> استعلام </h1>
		</section>
  <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
              
   <!--_________________________________ نهايه modal ________________________________________-->
 
		  
		  <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>26</h3> <!--  php هاحط هنا عدد الاصناف اللى متكوده فى الداتا بيز -->

              <p><strong>استعلام عن صنف</strong></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>

<div class="text-center">
  <a href="pages/tables/Custom-data.php" class="btn btn-default btn-rounded mb-4"    style="background-color:rgb(60, 118, 61);
    color: #ededf5;
    width:100%;
    border-top-color: #eee;">عرض
    </a>
</div>
              
			  </div>
		  </div>
		  <!--____________
		  <!--###########################################################################3-->
		  
		  
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> 8 مخازن
                   <sup style="font-size: 20px"></sup></h3>

              <p><strong>استعلام عن مخزن</strong></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
   
	
<div class="text-center">
  <a href="pages/tables/QueryStore.php" class="btn btn-default btn-rounded mb-4"  style="background-color: rgb(60, 118, 61);
    color: #ededf5;
    width:100%;
    border-top-color: #eee;">عرض
    </a>
</div>
 
			  
   <!--_______________________________فين اللينك ؟__ نهايه modal ________________________________________-->
   
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>  
				  38  صومعه
				</h3>
              <p> <strong> استعلام عن صومعه</strong>  </p>
            </div>
            <div class="icon">
         <i class="ion ion-stats-bars"></i>
            </div>
             
<div class="text-center">
  <a href="pages/tables/QuerySilo.php" class="btn btn-default btn-rounded mb-4"   style="background-color:rgb(60, 118, 61);
    color: #ededf5;
    width:100%;
    border-top-color: #eee;">عرض
    </a>
</div>       
			  
			  
   <!--_________________________________ نهايه modal ________________________________________-->
 	  
          </div>
        </div>
      </div>
     </section>
   </div>
  <!-- /.content-wrapper -->
   <!--_______________________________________Button back to home page ___________________________________-->	

		
	   <form>
		<input style= "width: 110px;
					padding: 8PX;
					cursor: pointer;
					box-shadow: 6px 6px 5px;
					#999: ;
					-webkit-box-shadow: 6px 6px 5px #999;
					-moz-box-shadow: 6px 6px 5px #999;
					font-weight: bold;
					background: #00a65a;
					color: #fff;
					border-radius: 10px;
					border: 1px solid #999;
					font-size: 100%;
					position: absolute;
					bottom:10%;
					LEFt: 1%;"type="button" value='عوده' onclick="window.location.href='starter.php'" />
    </form>
		
		
		
		
		
	<!--_______________________________________Button back to home page ___________________________________-->	
      <!-- Main Footer -->
      <footer class="main-footer">
       
        <!-- Default to the left -->
          <strong>     جميع الحقوق محفوظة للشركة المصرية القابضة للصوامع والتخزين  
        &copy;   <a href="https://www.ehcss.com/">https://www.ehcss.com/</a> 2018-2019      .</strong>      </footer>

    
       
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
  </body>
</html>
