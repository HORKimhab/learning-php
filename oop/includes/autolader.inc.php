<?php
// Include other_file.php
// require_once './includes/newclass.inc.php';

/* Load Class Automatically */
spl_autoload_register('autoLoadClass');
function autoLoadClass($className){
    // print_r('test: ' . $className);
    /*  $className
        - newclass (is name of file, e.g newclass) (001)
        - Inside "newclass.class.php a class name must be the same af name of file        
    */

    $url = $_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI'];
    
    if(strpos($url, 'includes') !== false){
        $path = "../classes/";
    } else {
        $path = "classes/";
    }
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    // if(!file_exists($fullPath)){
    //     return false;
    // }

    require_once $fullPath;
}