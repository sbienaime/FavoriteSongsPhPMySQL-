<!doctype>
<html>


    <head>


        <link rel='stylesheet' type='text/css' href='style.css'>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">



        <title></title></head>


    <body>




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
        <p> Hello there, welcome to the Delete page. Use the form below to delete entries from the the DBS table. </p>





        <form action='delete_entry.php' method='POST'>
              
            <pre> Row <input type='text' placeholder='Enter your text here' name='id' > <br> <br><br></pre>
        <input type="submit"> 
        </form>
         
        <p> Please enter the row number corresponding to the entry you would like to delete. Thank you.</p>
               <table>
            <tr><th>Row Number</th> <th>Author</th><th>Title</th><th>Year</th><th>Artist</th></tr>
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
        $i=1;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
               
                echo "<tr>";
                echo "<td>".$i."</td>" ."<td>" . $row["author"] . "</td>" . "<td>" . $row["title"] . "</td>" . "<td>" . $row["release_year"] . "</td>" . "<td>" . $row["artist"] . "</td>" . "<br>";

                echo "</tr>";
                $i++;
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
      
            /*
              global $column_names;
              $column_names=array();

              $i=0;
              $file = file("favoritesongs1.csv");
              foreach($file as $k) {
              $column_names = explode(",", $k);

              foreach ($column_names as $x)

             

            echo "<pre>  Author  <input type='text' placeholder='Enter your text here' name='author' > <br> <br><br>";


            echo "<pre>  Title <input type='text' placeholder='Enter your text here' name='title' > <br> <br><br>";


            echo "<pre>  Artist <input type='text' placeholder='Enter your text here' name='singer' > <br> <br><br>";


            echo "<pre>   Year <input type='text' placeholder='Enter your text here' name='year' > <br> <br><br>";
            */
            
            
            
            
      

        /* $update = 'INSERT INTO Favorite_Songs (author, title, release_year, artist) 
          VALUES("' . $author . '","' . $title . '","' . $year . '","' . $artist . '");';
          if ($conn->query($update) === TRUE) {
          echo "New record created successfully";
          } else {
          echo "Error: " . $update . "<br>" . $conn->error;
          } */




      

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


