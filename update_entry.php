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
                <li><a href='insert.php' >Insert</a> </li>
                <li><a href='update.php' >Update</a> </li>
                <li><a href='delete.php' >Delete</a> </li>

            </ul>
        </nav> 



        <?php
        $id = $_POST['id'];



        $result;
        $author = $_POST['author'];
        $title = $_POST['title'];
        $entryCheck = 'Select * FROM favorite_songs where id ="' . $id . '";';
        $year = $_POST['year'];
        $artist = $_POST['singer'];

        //$line =array($author,$title,$artist,$year);
//$line = str_replace('"', '', $line);


        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_pass = 'password';
        $sqldb = 'favorite_songs';
        $m = "does not exist";



        

        if (!empty($_POST['singer']) && !empty( $_POST['id']) && !empty($_POST['author']) && !empty($_POST['title']) && !empty($_POST['year'])) {

            $conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $sqldb);
              $result = $conn->query($entryCheck);
            
            if ($result->num_rows > 0) {
                $conn->query($update);
                echo "Your changes have been made successfully. Thank You ";
                $conn->close();
            } else {
                echo "Please Enter a valid id. ";
            }
        } else {
           echo "Please fill out all fields. Thank You.";
        }


     



     
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