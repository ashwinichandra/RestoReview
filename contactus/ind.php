<?php
session_start();

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>


<html>
    <head>
        
        <title>Contact Form</title>
    
        <link rel="stylesheet" type="text/css" href="../css/bootstrap-override.css" >
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    </head>    
     <body id="colorbehind">
         <div id="wrapper">
       <div class="container" style="background-image: url(../images/contact.png); height: 370px; width :900px; background-size: cover;background-repeat: no-repeat; "></br></br></br></br></br></br></br></br></br></br>
        
       </div>
<?php
    require '../header.php';
?>

<?php  if(!empty($errors)): ?> 
    <ul><li>Please enter all the '*' required fields</li></ul>        
<?php endif; ?>      
        
     
<form action="contact.php" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:*</br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="contact_name" autocomplete="off"<?php echo isset($fields['contact_name'])? ' value="' .$fields['contact_name'] .'"' : '' ?>></br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:*</br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="contact_email" autocomplete="off"<?php echo isset($fields['contact_email'])? ' value="' .$fields['contact_email'] .'"' : '' ?>></br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message:*</br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="contact_message" rows="6" cols="30" <?php echo isset($fields['contact_message'])?  $fields['contact_message']  : '' ?>></textarea></br></br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">     
</form>
    </body>    
</html>
      
    
<?php      
unset($_SESSION['errors']);      
?>

<?php
require '../footer.php';
?>