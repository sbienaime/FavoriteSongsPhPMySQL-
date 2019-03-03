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
        $row=$_POST['id'];
         
         if (isset($row)){
             
             
        $author = $_POST['author'];
        $title = $_POST['title'];

        $year = $_POST['year'];
        $artist = $_POST['singer'];
       
        //$line =array($author,$title,$artist,$year);
//$line = str_replace('"', '', $line);


        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_pass = 'password';
        $sqldb = 'Test_Data';
        $m = "does not exist";
       
        $conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $sqldb);
        
        
        
         
        if(isset($author)){
        $update= ' UPDATE Favorite_Songs
        SET author ="'.$author.'" where id ="'.$row.'";';
        
        if ($conn->query($update) === TRUE) {
            echo "The author field was successfully successfully updated";
        } else {
            echo "Error: " . $update . "<br>" . $conn->error;
        }
        
        }
        else {echo 'The author field was not updated';}
        
        
        if(isset($title)){
        $update= ' UPDATE Favorite_Songs
        SET title ="'.$title.'" where id="'.$row.'";';
        
        
       
        if ($conn->query($update) === TRUE) {
            echo "The title field was successfully updated.";
        } else {
            echo "Error: " . $update . "<br>" . $conn->error;
        }
        
        }
         else {echo 'The title field was not updated .';}
        
        
        
        
        
        
          if(isset($year)){
        $update= ' UPDATE Favorite_Songs
        SET release_year ="'.$year.'" where id="'.$row.'";';
        
        
        
         if ($conn->query($update) === TRUE) {
            echo "The year was successfully updated";
        } else {
            echo "Error: " . $update . "<br>" . $conn->error;
        }
        
        
        
        
        
          }
           else {echo 'The realease year was not updated.';}
           
           
          if(isset($artist)){
        $update= ' UPDATE Favorite_Songs
        SET artist ="'.$artist.'" where id="'.$row.'";';
        
        
        
         if ($conn->query($update) === TRUE) {
            echo " The artist field was successfully update";
        } else {
            echo "Error: " . $update . "<br>" . $conn->error;
        }
        
        
        
        
          }
        
        
         else {echo 'The artist field was not updated.';}
       /* $update = 'INSERT INTO Favorite_Songs (author, title, release_year, artist) 
             VALUES("' . $author . '","' . $title . '","' . $year . '","' . $artist . '");';
        if ($conn->query($update) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $update . "<br>" . $conn->error;
        }*/





        $conn->close();
        echo "<p><strong><center>Your submission was succcessful</strong></center></p> ";
       
        }
        else{echo "Enter a valid row number";}
        
        ?>




    </body>
</html>