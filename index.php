
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
        <link rel='stylesheet' type='text/css' href='normalize.css'>
        <link rel="stylesheet" type="text/css" href="grid.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>


    <body>



        <!--// the navigation bar -->
        <nav>
            <!--this creates an unordered list inside of my navigation bar -->
            <ul class='main_pages'>
                <!-- these are the list items aka the navigation butons -->  
                <!-- navigation buttons are links -->

                <li><a href='index.php' >Home</a></li> 
                <li><a href='insert.php' >Insert</a> </li>
                <li><a href='update.php' >Update</a> </li>
                <li><a href='delete.php' >Delete</a> </li>
                <li><a href='register.php' >Register</a></li>
                 <li><a href="login.php">Log In</a></li>
                
                <li><a href='logout.php' >Log Out</a> </li>


                  <h1 class='title'>  List Of Favorite Songs  </h1>

            </ul>
        </nav> 

       


        <p> Below is your current list of favorite songs. You can add to this list by going to the forms page.  </p>
        
        <?php
        require_once('config.php');
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $m = "does not exist";
        $select = 'Select * from favorite_songs;';
        $result = $conn->query($select);
        
        
        
        
        echo "<table>";
           echo " <tr><th>Author</th><th>Title</th><th>Year</th><th>Artist</th></tr>";

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

               
                echo "<tr><td>" . $row['author'] . "</td>" . "<td>" . $row["title"] . "</td>" . "<td>" . $row["release_year"] . "</td>" . "<td>" . $row["artist"] . "</td></tr>";

                
            }
        } else {
            echo " Your table is currently empty :( ";
        }

        
            echo "</table>"   
        
        ?>
            
    
            
            
           
            
         <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-2-of-1">
           <!--this creates an unordered list inside of my navigation bar-->
            <ul class="footer-nav">
                <!-- these are the list items aka the navigation butons 
                <!-- navigation buttons are links -->

                <li><a href="index.php">Home</a></li> 
                <li><a href="insert.php">Insert</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>                                                                                                          



            </ul>
          
        </div>
            <div class="col span-2-of-1">
                <ul class="footer-links icons" >
                    
                    
            <li><a class='facebook' href="#"><ion-icon class='icons1' name="logo-facebook"></ion-icon></a></li>
            <li><a class='linkedin' href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a class='twitter' href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a  class='github' href="#"><ion-icon name="logo-github"></ion-icon></a></li>
             
                    
                    
           </ul>
           </div>
           </div>
            
            
            
            <div class="row">
            <p class='footerp'>
                
            Copyright &copy; 2019 by Steve Bien-Aime . All rights reserved.     
            
            </p>
            </div>
            
           
        </footer>  
        

<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
</body>
</html>