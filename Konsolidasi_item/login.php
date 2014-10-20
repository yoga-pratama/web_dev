<?php 
include 'include/global/config.php';
if(isset($_SESSION['userid']) && $_SESSION['userid'] != ''){ // Redirect to secured user page if user logged in
	echo '<script type="text/javascript">window.location = "index.php"; </script>';
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Konsolidasi Item Planet Kredit</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	<div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" >
		        <h2 class="form-login-heading">Login</h2>
		       	 <div class="login_result" id="login_result"></div>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="User ID" name="username" id="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
		           
		            <hr class="blur">
		            <input class="btn btn-primary btn-lg btn-block" type="submit" name="login" id="login" value="Login" />
		           
		          <hr>
	      		
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    

    <!--Custom Script -->
    <script type="text/javascript" src="include/loginpage/clientside/loginController.js"></script>

     <style type="text/css">
    	.login_result{
    		text-align: center;
    		padding-top: 5%;
    		text-decoration: bold;
    	}

    	#erorlabel{
    		color: red;

    	}
    	.blur{
    		border: 0;
    	}


    </style>


  </body>
</html>
