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
                
                
                
                <li><a href='Dashboard.php' >Form</a> </li>
                
                
        </ul>
        </nav> 
    <p> Hello there, welcome to the CSV Editor page. Use the form below to add entries to the file. </p>
    
    
    
    
    
    <form action='successfulsubmission.php' method='POST'>
      <?php
      
      session_start();
      
      global $column_names;
      $column_names=array();
     
      $i=0;
       $file = file("favoritesongs1.csv");  
       foreach($file as $k) {
            $column_names = explode(",", $k);
             
             foreach ($column_names as $x){
               
 

switch ($i) {
    case 0:
        echo "<pre>".$column_names[$i]."  "."<input type='text' placeholder='Enter your text here' name='author' > <br> <br><br>";
        break;
    case 1:
        echo "<pre>".$column_names[$i]."  "."<input type='text' placeholder='Enter your text here' name='title' > <br> <br><br>";
        break;
    case 2:
       echo "<pre>".$column_names[$i]."  "."<input type='text' placeholder='Enter your text here' name='singer' > <br> <br><br>";
        break;
    case 3: 
       echo "<pre>".$column_names[$i]."  "."<input type='text' placeholder='Enter your text here' name='year' > <br> <br><br>";          
    break;
    
    
}           
                 
           $i++;
             }
     break 1;
       }
     
     
     
      
               
 
?>
      
          <input type='submit'> 
      </form>
          
     </body>
     
     
      
         
         
         
     
     
     


</html>
