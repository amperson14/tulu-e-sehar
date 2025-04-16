<?php

session_start();
include_once 'database.php';

?>

<!DOCTYPE html>
<html>
<head>
<style>
  .container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .diamond-box {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .diamond-box.left {
    left: 0;
    padding-left: 20px;
  }

  .diamond-box.right {
    right: 0;
    padding-right: 20px;
  }

  .diamond-img {
    width: 200px;
    height: 200px;
    transform: rotate(45deg);
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
  }

  .diamond-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: rotate(-45deg);
  }

  .login-box {
    z-index: 1;
  }
</style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title><title>Admin Dashboard</title><link rel="icon" href="images/TeS.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page bg-green">
      <div class="container">
  <!-- Left Diamond Images -->
  <div class="diamond-box left">
    <div class="diamond-img"><img src="images/img1.jpg" alt=""></div>
    <div class="diamond-img"><img src="images/img2.jpg" alt=""></div>
    <div class="diamond-img"><img src="images/img3.jpg" alt=""></div>
  </div>

  <!-- Login Box -->
  <div class="login-box">
    <div class="login-logo">
      <img src="images/TeS.png" style="height: 150px; vertical-align: middle; margin-right: 8px;"><br>
      <small style="text-align: center;font-size:100% !important"><b>Tulu-e-Sehar Mgmt Sys</b></small>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post">
        <div class="form-group has-feedback">
          <input name="email" type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button name="submit" value="submit" type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
          </div>
        </div>
      </form>

      <?php
      // Your PHP login code remains unchanged
      ?>
    </div>
  </div>

  <!-- Right Diamond Images -->
  <div class="diamond-box right">
    <div class="diamond-img"><img src="images/img4.jpg" alt=""></div>
    <div class="diamond-img"><img src="images/img5.jpg" alt=""></div>
    <div class="diamond-img"><img src="images/img6.jpg" alt=""></div>
  </div>
</div>

    <?php

    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM user WHERE email ='".$email."' and password = '".$password."' ";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                   // output data of each row
                     while($row = $result->fetch_assoc()) {
                      $_SESSION['role'] = $row['role'];
                       

                      //$_SESSION['user'] = $row['fname']." ".$row['lname'];






                      
                       }

                       $sql2 = "SELECT * FROM ".$_SESSION['role']." WHERE email ='".$email."'";
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                              $_SESSION['user'] = $row2['fname']." ".$row2['lname'];
                              //$_SESSION['uid'] = $row2['pid'];
                              if($_SESSION['role']=='Student'){
                                $_SESSION['uid']=$row2['sid'];
                              }else if($_SESSION['role']=='Parent'){
                                $_SESSION['uid']=$row2['pid'];
                              }else if($_SESSION['role']=='Teacher'){
                                $_SESSION['uid']=$row2['tid'];
                              }
                            }

                        }

                        header("Location:./");
                                  }else{echo "<p style='width:100%;text-align;center'>Incorrect username or password</p>";}
    }

    ?>

   
    <!-- /.social-auth-links -->

   <br>
    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

</script>
</body>
</html>
