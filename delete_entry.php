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
        $author = $_POST['author'];
        $title = $_POST['title'];

        $year = $_POST['year'];
        $artist = $_POST['singer'];
        $row=$_POST['id'];
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

        $delete = 'DELETE FROM Favorite_Songs WHERE id="'.$row.'";';
        if ($conn->query($delete) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $delete . "<br>" . $conn->error;
        }





        $conn->close();
        echo "<p><strong><center>Your submission was succcessful</strong></center></p> ";
        ?>




    </body>
</html>