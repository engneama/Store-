		  
	
	<!-- starting code php login -->
		<?php
     session_start();         /* دى اول جادة بتتعمل فى الصفحه */ 
 
       //  if (isset($_POST['form_submitted'])) 
        if($_SERVER['REQUEST_METHOD']=='POST') // if request come from form only will excute if 
 	          { 
				   include "../../Data_Repository/connection.php";
					$User = $_POST['username'];
					$Pass = $_POST['password'];
					$encryptedPassword=md5($Pass);
			
			  echo "<br>";
			$sql="SELECT User_Fname ,password ,user_type from users where
			User_Fname='".$User."'and password='".$encryptedPassword."'";

		    $result = mysqli_query($conn, $sql);
   			if ($result->num_rows>0) 
			{
					$rows=mysqli_fetch_array($result); // this command to access $result conenet 
			        $_SESSION["USERNAME"]=$User;   // TO ENTER 
 				    $_SESSION["UserType"]=$rows['user_type'];//ur passwrod is neama
			        header ("location:../../starter.php");    

			 }
			 else
			 {
				 echo"<script> alert('تاكد من كتابه اسم المستخدم او كلمه المروربشكل صحيح');</script>";
			 }

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
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css"> 
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
    <link rel='shortcut icon' href="../../dist/img/logo.jpg">
	</head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo"> </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">البرنامج الموحد للمخازن</p>
        <form action="Loginpage.php" method="POST"  onSubmit="return validation();">
            <div class="form-group has-feedback">
            <input type="text" class="form-control"id="UserName" name="username" placeholder=" ادخل اسم المستخدم" autocomplete="off">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="PassWord" name="password" autocomplete="off" class="form-control" placeholder="ادخل كلمه المرور">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> حفظ كلمه المرور
                </label>
				  <input type="hidden" name="form_submitted" value="1" />
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
            <input value="دخول" type="submit" class="btn btn-primary btn-block btn-flat " style="position: relative;
    top: 45px;
    width: 121px;
    right: 50px;
    margin:30px;"/;>
				    </form>
            </div><!-- /.col --> 
          </div>
    <!--    <a href="#">نسيت كلمه المرور</a><br>-->
         </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
   
   <script src="../../dist/js/login.js"></script> <!-- external file js -->
	 
	</body>
</html>
