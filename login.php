<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body id="colorbehind">
        <?php
        require 'header.php';
        ?>
        <div id="wrap">
        <form class="form-horizontal" role="form"  method="POST">
            <fieldset>
                <legend>Register</legend>
                  <div class="form-group">
        <label class="control-label col-sm-2" for="firstname">First Name:</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name">
        </div>
        </div>
                  <div class="form-group">
        <label class="control-label col-sm-2" for="lastname">Last Name:</label>
        <div class="col-sm-5"> 
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="username">Username:</label>
        <div class="col-sm-5">
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-5">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-5"> 
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="password_confirm">Password (Confirm):</label>
        <div class="col-sm-5"> 
        <input type="password" class="form-control" id="password_confirm" placeholder="Enter password">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="submit">Register</button>
    </div>
  </div>
                            </fieldset>
 
</form>

        </div>        <?php
        if(isset($_POST["submit"])){
       $username = "root";
                 $password = "";
           $dbhost = "mysql:host=localhost;dbname=restaurant_db";
           
               
             $con = new PDO($dbhost, $username, $password); 
               echo "connected";
           
               $form = $_POST;
               $fn=$form['firstname'];
               $ln=$form['lastname'];
               $un=$form['username'];
               $pwd=$form['pwd'];
               $em=$form['email'];
            
               $insert = "INSERT INTO user( First_Name,Las_Name, UserName, Password,Email_Address)VALUES('".$fn."','".$ln."','".$un."','".$pwd."','".$em."')";
             
               $query=$con->prepare($insert);
               $query->execute();
                  
        }
        ?>
        <?php
      require 'footer.php';
  ?>
    </body>
</html>
