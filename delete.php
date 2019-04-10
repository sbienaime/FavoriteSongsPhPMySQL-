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


        <link rel='stylesheet' type='text/css' href='style.css'>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



        <title></title></head>


    <body>




        <nav class='main_pages'> 


            <!--this creates an unordered list inside of my navigation bar -->
            <ul>

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
        <p> Hello there, welcome to the Delete page. Use the form below to delete entries from the the DBS table. </p>
        <p> Please enter the id number corresponding to the entry you would like to delete. Thank you.</p>




        <form action='delete_entry.php' method='POST' onSubmit='return validateDelete(this)'>
              
            <pre> ID <input type='number' pattern ='[0-9]' placeholder='Enter numbers only' name='id' > <br> <br><br></pre>
        <input type="submit"> 
        </form>
         
       
               <table>
            <tr><th>id</th> <th>Author</th><th>Title</th><th>Year</th><th>Artist</th></tr>
        <?php
        error_reporting(E_ALL);         
        ini_set('display_errors', 1);
                   
        require_once('config.php');
       

       




        $select = 'Select * from favorite_songs;';
               
        $result =$conn->query($select);
        $i=1;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
               
                echo "<tr>";
                echo "<td>".$row["id"]."</td>" ."<td>" . $row["author"] . "</td>" . "<td>" . $row["title"] . "</td>" . "<td>" . $row["release_year"] . "</td>" . "<td>" . $row["artist"] . "</td>" . "<br>";

                echo "</tr>";
                $i++;
            }
        } else {
            echo "0 results";
        }

        ?>

    
           
             
             
           
</table>
         
                    
         <footer class='thisfooter'>        
      
        <div class="row">
        
        
      <div class="col span-1-of-2">
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
        </div>
            <div class="col span-2-of-1">
                <ul class="footer-links">
                    
                    
            <li><a class='facebook' href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a class='linkedin' href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a class='twitter' href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a  class='github' href="#"><ion-icon name="logo-github"></ion-icon></a></li>
             
                    
                    
           </ul>
           </div>
         
            
            
            <div class="row">
            <p class='footerp'>
                
            Copyright &copy; 2019 by Steve Bien-Aime . All rights reserved.     
            
            </p>
            </div>
            
           
        </footer>  
        

<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script> 
 <script type="text/javascript" src="validatelogin.js"></script>
    </body>


</html>