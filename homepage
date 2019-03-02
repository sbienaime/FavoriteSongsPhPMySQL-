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
                
                
                
                <li><a href='Dashboard.php' >Form</a> </li>
                
                
        </ul>
        </nav> 

 
       
 <?php 
 

   
   
 
 $author=$_POST['author'];
 $title=$_POST['title'];
 
 $year =$_POST['year'];
 $singer=$_POST['singer'];
 
 $line =array($author,$title,$singer,$year);
 
$line = str_replace('"', '', $line);
$file = fopen("favoritesongs1.csv","a");


 // fputcsv($file,$line);
  fputs($file, implode($line, ',')."\n");

fclose($file);
echo "<p><strong><center>Your submission was succcessful</strong></center></p> ";

?>




    </body>
</html>

