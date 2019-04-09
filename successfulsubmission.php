<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



<!doctype html>  
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="grid.css">

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <nav>
            <ul class='sub_pages'>

                <!-- these are the list items aka the navigation butons -->  


                <!-- navigation buttons are links -->


                <li><a href='index.php' >Home</a></li> 
                <li><a href='insert.php' >Insert</a> </li>
                <li><a href='update.php' >Update</a> </li>
                <li><a href='delete.php' >Delete</a> </li>
                <li><a href='logout.php' >Log Out</a> </li>
                
                
             <h1 class='title'>  List Of Favorite Songs  </h1>
            </ul>
        </nav> 



        <?php
        
        require_once('config.php');
        $author = $_POST['author'];
        $title = $_POST['title'];
        $id = $_POST['title'];
        $year = $_POST['year'];
        $artist = $_POST['singer'];

        //$line =array($author,$title,$artist,$year);
//$line = str_replace('"', '', $line);


        error_reporting(E_ALL);
        ini_set('display_errors', 1);
       
        $m = "does not exist";
        
   

        $insert = 'INSERT INTO favorite_songs (author, title, release_year, artist) 
             VALUES("' . $author . '","' . $title . '","' . $year . '","' . $artist . '");';
         if (!empty($_POST['singer']) && !empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['year']) ) {
             
            
            
            if (!is_numeric($_POST['year']) || (int)$_POST['year']< 1800 || (int)$_POST['year'] > 2019) {
               echo "<div class='submissions'> Please enter a valid year e.g. 1994</div>"; 
            }
            else{

              $result = $conn->query($insert);
               echo "<div class='submissions'> Success. !</div>";
                }
            
        }
         else {
           echo "<div class='submissions'> Please fill out all fields. Thank You.</div>";
        }




        $conn->close();
       
        ?>
                    
         <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-2-of-1"
           <!--this creates an unordered list inside of my navigation bar-->
            <ul class="footer-nav">
                <!-- these are the list items aka the navigation butons 
                <!-- navigation buttons are links -->

                <li><a href="index.php">Home</a></li> 
                <li><a href="Dashboard.php">Insert</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>                                                                                                          



            </ul>
          
        </div>
            <div class="col span-2-of-1">
                <ul class="footer-links icons">
                    
                    
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