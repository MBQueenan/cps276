 <?php  
 static $result = array();     
 if(isset($_POST['submit'])) {         
    require_once "class.php";       
    $Addname = new Nameform($_POST["names"]);         
    $namelist=$_POST["namelist"];     
    if(!empty($namelist))              
        $result = $Addname->Set_Name($namelist);     
    }     
    else if(isset($_POST['reset'])) {         
        $namelist= $_POST['namelist']; 			
        unset($namelist); 
    } 
    ?>

    <!DOCTYPE html> <html lang="en">     
        <head>         
        <meta charset="utf-8">         
        <meta http-equiv="X-UA-Compatible" content ="IE=edge">         
        <meta name="viewport" content="width=device-width, initial-scale=1">         
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">         
            
        <title>Nameform</title>     
     </head>     
        <body>         
        <main class="container">             
        <h1>Add Names</h1>         
        </main> 

            <div class="container">             
            <div class="row">                 
            <div class="col">                     
                <form action="" method="POST">                         
                <input class="btn btn-primary" type="submit" name="submit" value="Add Name">                         
                <input class="btn btn-primary" type="reset" name="reset" value="Clear Name">                         
        <div class="form-group">                             
            <label for="EnterName" class="form-label">Enter Names: </label>                             
            <input type="text" class="form-control" name="namelist" id="EnterName">                         
        </div>                         
                            
        <div class="form-group">                            
            <label for="textareaName" class="form-label">List of Names: </label>                             
            <textarea class="form-control" name="names" id="textareaName" rows="15">
            <?php                                 
                $i=0;                                 
                while($i < count($result)){                                     
                    echo $result[$i++]."\n";                                 
                }                             
            ?></textarea>                         
        </div>                     
    </form>                 
    </div>             
    </div>         
    </div>     
    </body> </html>
