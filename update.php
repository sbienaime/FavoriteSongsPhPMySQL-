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

                   <h1 class='title'>  List Of Favorite Songs  </h1>

            </ul>
        </nav> 
        <p> Hello there, welcome to the Update page. Use the form below to update existing entries in your
            DBS table. </p>




        <p> Please enter the id number corresponding to the entry that you would like to edit. Thank You </p>
        <form action='update_entry.php' method='POST'>
            <?php
            /*
              global $column_names;
              $column_names=array();

              $i=0;
              $file = file("favoritesongs1.csv");
              foreach($file as $k) {
              $column_names = explode(",", $k);

              foreach ($column_names as $x)

             */

             echo "<pre> id  <input type='number' pattern ='[0-9' placeholder='Enter Numbers Only' name='id' > <br> <br><br></pre>";

            echo "<pre>  Author  <input type='text' placeholder='Enter your text here' name='author' > <br> <br><br></pre>";


            echo "<pre>  Title <input type='text' placeholder='Enter your text here' name='title' > <br> <br><br></pre>";


            echo "<pre>  Artist <input type='text' placeholder='Enter your text here' name='singer' > <br> <br><br></pre>";


            echo "<pre>  Year <input type='number' pattern ='[0-9]' placeholder='Enter Numbers Only' name='year'><br> <br><br></pre>";


            echo "<input type='submit' text='update'> </form>";


            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            $mysql_host = 'localhost';
            $mysql_user = 'root';
            $mysql_pass = 'password';
            $sqldb = 'favorite_songs';
            $m = "does not exist";

            $conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $sqldb);

            /* $update = 'INSERT INTO favorite_songs (author, title, release_year, artist) 
              VALUES("' . $author . '","' . $title . '","' . $year . '","' . $artist . '");';
              if ($conn->query($update) === TRUE) {
              echo "New record created successfully";
              } else {
              echo "Error: " . $update . "<br>" . $conn->error;
              } */



            echo "<table>";
            echo "<tr><th>id</th> <th>Author</th><th>Title</th><th>Year</th><th>Artist</th></tr>";
            $select = 'Select * from favorite_songs;';
            $result = $conn->query($select);
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $row ["id"]. "</td>" . "<td>" . $row["author"] . "</td>" . "<td>" . $row["title"] . "</td>" . "<td>" . $row["release_year"] . "</td>" . "<td>" . $row["artist"] . "</td>" . "<br>";

                    echo "</tr>";
                    $i++;
                }
            } 

            echo "</table>";
            
           
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