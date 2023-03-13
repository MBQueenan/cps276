 <?php 
 require_once "directory.php";
 $alreadyExists = FALSE; 
 $operSuccess = FALSE; 
 if (isset($_POST["submit"])) {        
   $dir_name = $_POST['dir_name'];         
   $data = $_POST['data'];          
   }
 ?>  
 <!DOCTYPE html> <html lang="en">  <head>     
    <meta charset="UTF-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Directories</title>               
    </head>  <body>      
    <h1>File and Directory Assignment</h1>    
    <label>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</label>      
             <?php     
              
                ?>      
        <form action="directory.php" method="POST">         
        <label for="">Folder Name</label>        
        <input type="text" name="dir_name" id="">         
    <br>         
    <label for="">File Content</label>         
    <textarea name="data" id="" cols="30" rows="10"></textarea>        
    <button type="submit">Submit</button>     
    </form> </body>  </html>
