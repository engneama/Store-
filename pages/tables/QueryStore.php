<?php
session_start();
header('Content-Type: text/html; charset=utf-8'); //  السطر دا لازم يتكب فى صفحه ال PHP 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "silos";
//$cat_name=$_POST['Cat_Name'];
$conn = new mysqli($servername, $username, $password, $dbname);

   if ($conn->connect_error)
     
     {
      die("Connection failed: " . $conn->connect_error);
     } 
         /* if (isset($_POST['submit']))*/
		  {
			  //والسرطرين دوول لازم بعد الاتصال بالداتا بيز عشان يتصل صح ويكتب عربى   وكل اللى زودته خليته يشتغل على الكونكشن  
			 
			  mysqli_query($conn,"SET NAMES 'UTF8'");
			  mysqli_query($conn,'SET CHARACTER SET UTF8');
			
			  
       $sql = "SELECT * FROM items";
       $result = mysqli_query($conn, $sql);

       
               
		  }


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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
	 <link rel='shortcut icon' href='logo.jpg'>
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
					<li><a href="Custom-data.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن الصنف </a></li>
					<li><a href="QueryStore.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن مخزن </a></li>
					<li><a href="QuerySilo.php" style="color: #fff;font-style: bold ;font-size: 20px;" >استعلام عن صومعه </a></li>

				  </ul>
            </li>
			  
			  <li class="treeview">
              <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i> <span></span> الحركه <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px;">
                <li><a href="../forms/GivingOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  اذن صرف </a></li>
		        <li><a href="../forms/AddationOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  اذن اضافه </a></li>
			    <li><a href="../forms/TransferOrder.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  اذن تحويل </a></li>
               </ul>
            </li>
			  
			  
			  <li class="treeview">
              <a href="#" style="color: #fff;font-style: bold ;font-size: 20px;"><i class="fa fa-link" style="color: #fff;font-style: bold ;font-size: 20px;"></i>  التقارير</a>
              <ul class="treeview-menu" style="color: #fff;font-style: bold ;font-size: 20px; ">
                <li><a href="../forms/ItemReport.php" style="color: #fff;font-style: bold ;font-size: 20px; " >  تقرير صنف </a></li>
		        <li><a href="../forms/StoreReport.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  تقرير مخزن </a></li>
			    <li><a href="../forms/ContractReport.php" style="color: #fff;font-style: bold ;font-size: 20px;" >  تقرير مستند </a></li>
               </ul>
            </li>
	  </ul>                       	
        </section>
      </aside>     <!-- /.sidebar-menu -->	

		
		
		

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
     

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">عرض بيانات المخزن </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>كود الصنف</th>
                        <th>كود التصنيف</th>
                        <th>اسم الصنف</th>
                        <th>الوارد من الصنف</th>
                        <th>الصادر من الصنف</th>
                        <th>بدايه المده</th>
                        <th>الرصيد الحالى </th>
                      </tr>
                    </thead>
                    <tbody>
          
	

                     </div>

				<?php
                       /*     if (mysqli_num_rows($result) > 0) {
                              // output data of each row
                              
                              while($row = mysqli_fetch_assoc($result)) 
                              {

                                if($row["Cat_ID"]==$cat_name)
                                  {
                                      echo "<tr>";
                                      echo "<td>".$row["Item_ID"]."</td>";
                                      echo "<td>".$row["Cat_ID"]."</td>";
                                      echo "<td>".$row["Item_Name"]."</td>";
                                      echo "<td>".$row["Import_Items"]."</td>";
                                      echo "<td>".$row["Export_Items"]."</td>";
                                      echo "<td>".$row["Start_Amount"]."</td>";
                                      echo "<td>".$row["Current_Amout"]."</td>";
                                      echo "</tr>";
                                 }

                                }
                            } else {
                              echo "0 results";
                            }*/
                    ?>
                     
                    </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
		<!--	  <a class="btn btn-success" href='../../starter.php'>وده للصفحه الرئيسيه</a>-->
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
					background: #367fa9;
					color: #fff;
					border-radius: 10px;
					border: 1px solid #999;
					font-size: 100%;
					position: absolute;
					bottom:10%;
					LEFt: 1%;"type="button" value='عوده' onclick="window.location.href='../../queries.php'" />
    </form>
		
		
		
		
		
	<!--_______________________________________Button back to home page ___________________________________-->	

              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>     جميع الحقوق محفوظة للشركة المصرية القابضة للصوامع والتخزين  
        &copy;   <a href="https://www.ehcss.com/">https://www.ehcss.com/</a> 2018-2019      .</strong> 
      </footer>   

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
