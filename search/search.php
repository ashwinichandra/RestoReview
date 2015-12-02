<?php 
require'database.php';
?> 

<html>
    <head>
        <meta charset="UTF-8">
        <title>Search</title>
    </head>
<body>
    
    <form action="search.php" method="post"> 
            <input type="text" name="searchterm" placeholder="Search...">
            <input type="submit" name="search" value="Search" >    
    </form> 
          
        
<?php
$search = trim($_POST['searchterm']);
$query = $conn->prepare("SELECT * FROM `restaurants` where `city` LIKE '%$search%'");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
		 		echo 'Search found :<br/>';
                
            while ($results = $query->fetch()) {				
                echo $results['title']; echo'</br>';				
                echo $results['address']; echo'</br>';
                echo $results['rating']; echo'</br>';
            }					
        } else {
            echo 'No data found for this city';
        }
    
    ?>
        
        
        
    </body>
</html>

