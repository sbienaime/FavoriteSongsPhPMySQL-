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
    <p> Hello there, welcome to the Insert page. Use the form below to insert new entries into the DBS table. </p>
    
    
    
    
    
    <form action='successfulsubmission.php' method='POST'>
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
       
       echo "<pre>  Author  <input type='text' placeholder='Enter your text here' name='author' > <br> <br><br>";
       
   
        echo "<pre>  Title <input type='text' placeholder='Enter your text here' name='title' > <br> <br><br>";
       
    
         echo  "<pre>  Artist <input type='text' placeholder='Enter your text here' name='singer' > <br> <br><br>";
       
    
         echo "<pre>   Year <input type='text' placeholder='Enter your text here' name='year' > <br> <br><br>";         
   
    
    
       
                 
   
     
     
     
      
               
 
?>
      
          <input type='submit'> 
      </form>
          
     </body>
     
     
      
         
         
         
     
     
     


</html>