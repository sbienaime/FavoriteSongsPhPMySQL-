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
             <li><a href='Dashboard.php' >Form</a> </li>
                
                
        </ul>
        </nav> 
        
           <h1>  List Of Favorite Songs  </h1>
        
      
        <p> Below is your current list of favorite songs. You can add to this list by going to the forms page.  </p>
         <table>
        
        <?php
        
        session_start();
        $file = file("favoritesongs1.csv");  
           $c =1;
         foreach($file as $k) {
             $entry = explode(",", $k);
                     
              $array_size = sizeof($entry);
             
              for ($i = 0; $i < $array_size; $i++){
                  
                  
                  
                  
                  echo "<tr  class=row".$c.">";
         
            for ($i = 0; $i < $array_size; $i++){
                  echo "<td>". $entry[$i]. "</td>";
            }
                   
              echo "</tr>";
         
              }
           $c++;   
         }
         
        
      
        session_destroy();
        ?>
             
         </table>
    </body>
</html>
