<!doctype>  
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">


        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <nav>
            <ul>

                <!-- these are the list items aka the navigation butons -->  


                <!-- navigation buttons are links -->
                <li><a href='index.php' >Home</a></li> 
                <li><a href='Dashboard.php' >Insert</a> </li>
                <li><a href='update.php' >Update</a> </li>
                <li><a href='delete.php' >Delete</a> </li>

            </ul>
        </nav> 



        <?php
        $Results;
        $result;
        global $id ;
        $id= $_POST['id'];


        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_pass = 'password';
        $sqldb = 'favorite_songs';
        $m = "does not exist";
        global  $delete;
        $delete= 'DELETE FROM favorite_songs where id ="' . $id. '";';
        $conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $sqldb);
        $entryCheck = 'Select * FROM favorite_songs where id ="' . $id . '";';
       



      


        if (isset($_POST['submit'])) {

            if (empty($id)) {
                echo "The id field is required. Please review the table below then enter a valid id ";
            } else {

            
          
           
              
                
            }
        }
            $result = $conn->query($entryCheck);
            $Results=$result->num_rows; 
            
            if ( $Results==0) {
                echo "Please review the table below and enter a valid id. Thank you ";
            } 
            else {
               
                $conn->query($delete);
                echo "You have successfully deleted your selected entry.";
            }









            $conn->close();
            ?>
                          
         <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-1-of-2"
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
                <ul class="footer-links">
                    
                    
            <li><a class='facebook' href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
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