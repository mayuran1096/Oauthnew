<?php
    session_start();

    if (!isset($_SESSION['access_token'])) {
        header('Location:login.php');
        exit();
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Profile</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>
	<div class="=container" style="margin-top:100px">
    	<div class="row justify-content-center">
        	<div class="col-md-3" style="width: 700px; margin-left: 180px;">
            	<img src="<?php echo $_SESSION['userData']['picture']['url']?>">
                <br>
                <br>
               </div>
               
             <div class="col-md-9">
            	<table class="table table-hover table-bordered">
                	<tbody>
                    	<tr>
                        	<td>ID</td> 
                            <td><?php echo $_SESSION['userData']['id']?></td>
                        </tr>
                        
                    	<tr>
                        	<td>First Name :</td>
                            <td><?php echo $_SESSION['userData']['first_name']?></td> 
                        </tr>
                        
                    	<tr>
                        	<td>Last Name :</td>
                            <td><?php echo $_SESSION['userData']['last_name']?></td> 
                        </tr>
                        
                    	<tr>
                        	<td>Email : </td>
                            <td><?php echo $_SESSION['userData']['email']?></td> 
                        </tr>
                     </tbody>
                 </table>    
                      
               </div>  
            </div>
          </div>
</body>
</html>