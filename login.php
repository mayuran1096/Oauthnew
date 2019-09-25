<?php
	require_once "config.php";

    //if (!isset($_SESSION['access_token'])) {
      //  header('Location:login.php');
        //exit();
    //}

	$redirectURL="https://localhost/Auth3/fb-callback.php";
	$permissions=['email'];
	$loginURL=$helper->getLoginURL($redirectURL,$permissions);
	//echo $loginURL;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<body>

	<div class="=container" style="margin-top:100px">
    	<div class="row justify-content-center">
        	<div class="col-md-6 col-md-offset-3" align="center">
            	<img src="Images/logo.PNG" style="width:250px;">
                <br><br>
                <form>
                	<input name="email" placeholder="Email" class="form-control">
                    <br>
                    <input name="password" type="password" placeholder="Password" class="form-control">
                    <br>
                    <!-- <input type="submit" value="Log In" class="btn btn-primary"> -->
                    <input type="button" onclick="window.location='<?php echo $loginURL ?>';" value="Login with Facebook"  style="background-color:blue;color:white;width:250px;height:40px;" class="btn btn-primary">
                    
                </form> 
               </div>
            </div>
          </div>
                
</body>
</html>