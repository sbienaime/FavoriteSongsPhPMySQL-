
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

        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>


    <body>



        <!--// the navigation bar -->
        <nav>
            <!--this creates an unordered list inside of my navigation bar -->
            <ul>
                <!-- these are the list items aka the navigation butons -->  
                <!-- navigation buttons are links -->

                <li><a href='index.php' >Home</a></li> 
                <li><a href='Dashboard.php' >Insert</a> </li>
                <li><a href='update.php' >Update</a> </li>
                <li><a href='delete.php' >Delete</a> </li>



            </ul>
        </nav> 

        <h1>  List Of Favorite Songs  </h1>


        <p> Below is your current list of favorite songs. You can add to this list by going to the forms page.  </p>
        <table>
            <tr> <th>Author</th><th>Title</th><th>Year</th><th>Artist</th></tr>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_pass = 'password';
        $sqldb = 'Test_Data';
        $m = "does not exist";

        $conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $sqldb);

        /* $update = 'INSERT INTO Favorite_Songs (author, title, release_year, artist) 
          VALUES("' . $author . '","' . $title . '","' . $year . '","' . $artist . '");';
          if ($conn->query($update) === TRUE) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $update . "<br>" . $conn->error;
          } */




        $select = 'Select * from Favorite_Songs;';
        $result = $conn->query($select);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td>" . $row["author"] . "</td>" . "<td>" . $row["title"] . "</td>" . "<td>" . $row["release_year"] . "</td>" . "<td>" . $row["artist"] . "</td>" . "<br>";

                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        // $file = file("favoritesongs1.csv");
        //$c = 1;
        ////foreach ($file as $k) {
        //  $entry = explode(",", $k);
        // $array_size = sizeof($entry);
        ///for ($i = 0; $i < $array_size; $i++) {
        //echo "<tr  class=row" . $c . ">";
        //for ($i = 0; $i < $array_size; $i++) {
        ////    echo "<td>" . $entry[$i] . "</td>";
        //}
        // echo "</tr>";
        //}
        // $c++;
        //}
        ?>

    </table>
</body>
</html>