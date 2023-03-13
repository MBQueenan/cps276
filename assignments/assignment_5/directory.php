<?php
class Direct{
    
    public static function Class($dir_name){
        $rootDir = '../directories/';
        $contents = scandir($rootDir); 
        $newDir= "";
        if (isset($_POST["submit"])){
             if (empty($dir_name)) {             
                echo "Folder Name is empty";         
            } else if (empty($data)) {             
                echo "Data is empty";         
                } else {              
                    foreach (
                    $contents as $entry) {                 
                        if (is_dir($rootDir . $entry) and $entry === $dir_name) {                     
                            $alreadyExists = TRUE;                     
                            break;                 
                            }             
                        }              
                        if ($alreadyExists) {                 
                            echo "A directory already exists with that name.";
                            php_include('../assignment_5/readme.txt')           
                        } 
                }
    if(!empty($dir_name))     
    $newDir = $rootDir . $dir_name . "/";                 
    $operSuccess = mkdir($newDir, 0777, true);                  
    if ($operSuccess) {                     
        file_put_contents($newDir . "readme.txt", $data);                     
        echo "File and Directory where created";                     
        echo "<label class=\"successLabel\"><a href=\"/directories/" . $dir_name;                     
        echo "/readme.txt\" >../assignment_5/readme.txt</a> </label>";                 
    } 
}
        else {                     
            echo "File Operation Faild.";                 
        }             
 
    }
  }      
     
