
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
<header>
    <img src="uploads/profile-pic/logod.png" alt="" class="logo">
		
	</header>
   
  
    <?php echo form_open('Home/login'); ?>
      <div class="loginbox">
    <img src="uploads/profile-pic/avatar.png" class="avatar">
        <h1>Login Here</h1>
        
        
      <p>Username</p>
      <input type="text" name="txtusername" class="form-control" placeholder="Enter your username" required="required">
        
      <p>Password</p>
      <input type="password" name="txtpassword" class="form-control" placeholder="Enter Password">
      <i class="fa-solid fa-lock"></i>      
    
      <?php echo $this->session->flashdata('login_error'); ?>
      
        <!-- /.col -->

        <input type="submit" name="login-submit" value="Login">
           
        
      
        <!-- /.col -->
      </div>
  

  <!-- /.login-box-body -->
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

<style>


@import url('https://fonts.googleapis.com/css?family=Lobster');
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');




body{
	margin: 0;
	 padding: 0;
    background-color: #000;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}


header{
	background: white;
	height: 60px;
  width: 100%;
}
header .logo{

	height: 200px;
  width: 200px;
	float: left;
bottom: 300px;
padding: 0;
margin: 0;
  

}

header h1{
	font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
	font-weight: 400;
	font-size: 32px;
	margin-left: 100px;
	top:50px;
  color: red;

  
  
}



.loginbox{
    width: 320px;
    height: 400px;
    background: #fff;
    color: #fff;
    top: 60%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

.loginbox h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 22px;
    color:red;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color:#000;
}

.loginbox input{
    width: 100%;
    margin-bottom: 30px;

}
.loginbox :-ms-input-placeholder{
  margin: 0;
  padding: 0;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}

.loginbox input[type="text"], input[type="password"]
{
    border:red;
    border-bottom: 2px solid #000;
    color: #000;
    outline: none;
    height: 40px;
    color: #000;
    font-size: 16px;
    width: 250px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width:250px;

    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}
</style>
</body>
</html>

